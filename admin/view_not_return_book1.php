<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$book_no = "";
	$student_name = "";
	$query = "select issued_books.book_name,issued_books.book_author,issued_books.book_no,users.name from issued_books left join users on issued_books.student_id = users.id where issued_books.status = 0";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Returned Books</title>
    <link rel="stylesheet" href="css/user-dashboard.css">
    
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	  
	  <style>
		.gradient-text {
  /* Fallback: Set a background color. */
  background: rgb(36,0,34);
background: linear-gradient(90deg, rgba(36,0,34,1) 0%, rgba(171,160,205,1) 1%, rgba(255,0,116,1) 100%);
  /* Set the background size and repeat properties. */
  background-size: 100%;
  background-repeat: repeat;

  /* Use the text as a mask for the background. */
  /* This will show the gradient as a text color rather than element bg. */
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; 
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
}


/* Style the rest of the page. */
body {
  background-color: #28282B;
}


	  </style>
</head>
<body>
	
  <div class="layout">
  <nav class="header" >
	<i class="fa fa-bars"></i>
		<h4 style="margin-left:-160px;" style="margin-top:18px;"><a  href="admin_dashboard1.php">Library Wings</a></h4>
	  
      <div class="header-user">
	  <i class="fas fa-user-circle icon" ></i>Welcome: <?php echo $_SESSION['name'];?>
	  </div>
		
	  

			<ul class="nav navbar-nav navbar-right" style="display:flex; flex-direction:row;">

			<li class="nav-item" style="margin-top:8px;margin-right:10px;">
		        <a class="nav-link" href="issue_book1.php">Issue a Book</a>
		      </li>
			  
			  
		      <li class="nav-item dropdown" style=" margin-right:10px; ">
			  <div class="dropdown">
  <button class="dropbtn gradient-text" style="font-weight:700;">Authors</button>
  <div class="dropdown-content">
    <a href="add_author1.php">Add Author</a>
    <a href="manage_author1.php">Manage Authors</a>

  </div>
</div>
		      </li>
			  
			  
			  <li class="nav-item dropdown" style=" margin-right:10px; ">
			  <div class="dropdown">
  <button class="dropbtn gradient-text" style="font-weight:700;" >Category</button>
  <div class="dropdown-content">
    <a href="add_cat1.php">Add Category</a>
    <a href="manage_cat1.php">Manage Category</a>
  </div>
</div>
		      </li>
			  
			  <li class="nav-item dropdown" style=" margin-right:10px; ">
			  <div class="dropdown">
  <button class="dropbtn gradient-text active1" style="font-weight:700;">Books</button>
  <div class="dropdown-content">
    <a href="add_book1.php">Add Book</a>
    <a href="manage_book1.php">Manage Books</a>
  </div>
</div>
		      </li>
			  
			  <li class="nav-item dropdown" style=" margin-right:10px; ">
			  <div class="dropdown">
  <button class="dropbtn gradient-text" style="font-weight:700;">Profile</button>
  <div class="dropdown-content">
    <a href="view_profile1.php">View Profile</a>
    <a href="edit_profile1.php">Edit Profile</a>
    <a href="change_password1.php">Change Password</a>
  </div>
</div>
		      </li>
			  
			  
		      <li class="nav-item" style="margin-top:8px;">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
	  
	</nav>

    <div class="sidebar" >
      <ul>
        <li> <a class="sidebar-list-item active" href="admin_dashboard1.php"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="add_book1.php"> <i class="fas fa-toolbox icon"></i><em>Add New Book</em></a>
        </li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="manage_book1.php"> <i class="fas fa-toolbox icon"></i><em>Manage Books</em></a>
        </li>
        
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="add_cat1.php"> <i class="fas fa-toolbox icon"></i><em>Add New Category</em></a>
        </li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="manage_cat1.php"> <i class="fas fa-toolbox icon"></i><em>Manage Category</em></a>
        </li>
        
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="add_author1.php"> <i class="fas fa-toolbox icon"></i><em>Add New Author</em></a>
        </li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item " href="manage_author1.php"> <i class="fas fa-toolbox icon"></i><em>Manage Author</em></a>
        </li>

        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="edit_profile1.php"> <i class="fas fa-tasks icon"></i><em>Edit Profile</em></a></li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="change_password1.php"> <i class="fas fa-calendar icon"></i><em>Change Password</em></a>
        </li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="issue_book1.php"> <i class="fas fa-toolbox icon"></i><em>Issue a Book</em></a>
        </li>
        
      </ul>
    </div>

    <main class="content">
	<div class="main-header" style="max-width:790px;">
        <div class="main-title">
          <h1>Not Returned Books</h1>
        </div>
        <div class="main-form">
          <form name="event">
          <table class="table-bordered" width="700px" style="text-align: center; margin-left:-120px; color:whitesmoke;">
						<tr>
            <th>S. No</th>
                            <th>Name</th>
							<th>Author</th>
							<th>Number</th>
							<th>Student Name</th>
						</tr>

                        	<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['book_name'];?></td>
							<td><?php echo $row['book_author'];?></td>
							<td><?php echo $row['book_no'];?></td>
							<td><?php echo $row['name'];?></td>
						</tr>

					<?php
						}
					?>	
                    </table>
          </form>
        </div>
      </div>
    </main>

  </div>
</body>
</html>