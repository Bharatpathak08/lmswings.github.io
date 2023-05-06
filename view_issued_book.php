<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$book_no = "";
	$query = "select book_name,book_author,book_no from issued_books where student_id = $_SESSION[id] and status = 1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issued Book</title>
    <link rel="stylesheet" href="css/user_dashboard.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	
  <div class="layout">
	

    <nav class="header" >
	<i class="fa fa-bars"></i>
		<h4 style="margin-left:-360px;" style="margin-top:18px;"><a  href="user_dashboard1.php">Library Wings</a></h4>
	  
      <div class="header-user">
		
	  <i class="fas fa-user-circle icon" ></i>Welcome: <?php echo $_SESSION['name'];?>
	  
	  </div>
		
	  <ul class="nav navbar-nav navbar-right" style="display:flex; flex-direction:row;">
		      <li class="nav-item dropdown" style=" margin-right:30px;">
			  <div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a href="view_profile1.php">View Profile</a>
    <a href="edit_profile1.php">Edit Profile</a>
    <a href="change_password1.php">Change Password</a>
  </div>
</div>
		      </li>
			  
		      <li class="nav-item" style="margin-top:8px;">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
	  
	</nav>

	<div class="sidebar">
      <ul>
        <li> <a class="sidebar-list-item " href="user_dashboard1.php"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        <li> <a class="sidebar-list-item active" href="view_issued_book.php"><i class="fas fa-tasks icon"></i> <em>View Issued Books</em></a></li>
        <li> <a class="sidebar-list-item" href="view_profile1.php"> <i class="fas fa-user icon"></i><em>View Profile</em></a></li>
        <li> <a class="sidebar-list-item " href="edit_profile1.php"> <i class="fas fa-toolbox icon"></i></i><em>Edit Profile</em></a>
        </li>
        <li> <a class="sidebar-list-item" href="change_password1.php"><i class="fas fa-lightbulb icon"></i> <em>Change Password</em></a>
        </li>
       
      </ul>
    </div>

    <main class="content">
	<div class="main-header">
        <div class="main-title">
          <h1>Issued Books </h1>
        </div>
        <div class="main-form">
          <form name="event">
          <table class="table-bordered" width="550px" style="text-align: center; margin-left:-50px; color:whitesmoke;">
						<tr>
							<th>Name</th>
							<th>Author</th>
							<th>Number</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['book_name'];?></td>
							<td><?php echo $row['book_author'];?></td>
							<td><?php echo $row['book_no'];?></td>
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