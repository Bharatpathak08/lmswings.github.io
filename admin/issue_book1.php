<?php
	session_start();
	require("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
    <link rel="stylesheet" href="css/user-dashboard.css">
    
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	  
	  
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
		        <a class="nav-link active1" href="issue_book1.php">Issue a Book</a>
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
  <button class="dropbtn gradient-text" style="font-weight:700;">Books</button>
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
        <li> <a class="sidebar-list-item " href="admin_dashboard1.php"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        
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
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="manage_author1.php"> <i class="fas fa-toolbox icon"></i><em>Manage Author</em></a>
        </li>

        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="edit_profile1.php"> <i class="fas fa-tasks icon"></i><em>Edit Profile</em></a></li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="change_password1.php"> <i class="fas fa-calendar icon"></i><em>Change Password</em></a>
        </li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item active" href="issue_book1.php"> <i class="fas fa-toolbox icon"></i><em>Issue a Book</em></a>
        </li>
        
      </ul>
    </div>

    <main class="content">
      <div class="main-header">
        <div class="main-title">
          <h1>Issue Book</h1>
        </div>
        <div class="main-form">
          <form name="event" action="" method="post">
            <input type="text" name="book_name" id="ftitle" placeholder="Book Name" required>

            <select name="book_author" id="ftitle" placeholder="Author  ID" required>
            <option>-Select author-</option>
							<?php  
								$connection = mysqli_connect("localhost","root","");
								$db = mysqli_select_db($connection,"lms");
								$query = "select author_name from authors";
								$query_run = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($query_run)){
									?>
									<option><?php echo $row['author_name'];?></option>
									<?php
								}
							?>
						</select>


            <input type="text" name="book_no" id="fdescription" placeholder="Book Number" required >

            <input type="text" name="student_id" id="flocation" placeholder="Student ID" required >

            <input type="text" name="issue_date" id="flocation" value="<?php echo date("yy-m-d");?>" Issue Date="Book Name" required >

            <input type="submit" name="issue_book" id="fsubmit" value="Issue Book" class="button">

          </form>
        </div>
      </div>
    </main>

</body>
</html>


<?php
	if(isset($_POST['issue_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into issued_books values(null,$_POST[book_no],'$_POST[book_name]','$_POST[book_author]',$_POST[student_id],1,'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);
?>
        <script type="text/javascript">
	alert("Issued successfully...");
	window.location.href = "admin_dashboard1.php";
</script>
        <?php
        

    }
?>