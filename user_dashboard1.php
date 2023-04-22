<?php
	session_start();
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
		}
		return($user_issue_book_count);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/user dashboard.css">
    
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
  <div class="layout">
	

    <nav class="header" >
		<h4><a href="user_dashboard.php">Library Wings</a></h4>
      <i class="fa fa-bars"></i>
	  
      <div class="header-user">
		
	  <i class="fas fa-user-circle icon" ></i>Welcome: <?php echo $_SESSION['name'];?>
	  <i class="fas fa-user-circle icon"></i>Email: <?php echo $_SESSION['email'];?>
	  </div>
		
	  <ul class="nav navbar-nav navbar-right" style="display:flex; flex-direction:row;">
		      <li class="nav-item dropdown" style=" margin-right:30px;">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
			  
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>
		    </ul>
	  
	</nav>

    <div class="sidebar">
      <ul>
        <li> <a class="sidebar-list-item active" href="#"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        <li> <a class="sidebar-list-item" href="view_profile.php"> <i class="fas fa-user icon"></i><em>View Profile</em></a></li>
        <li> <a class="sidebar-list-item" href="edit_profile.php"> <i class="fas fa-tasks icon"></i><em>Edit Profile</em></a></li>
        <li> <a class="sidebar-list-item" href="change_password.php"> <i class="fas fa-calendar icon"></i><em>Change Password</em></a>
        </li>
        <li> <a class="sidebar-list-item" href="view_issued_book.php"> <i class="fas fa-toolbox icon"></i><em>Issued Books</em></a>
        </li>
      </ul>
    </div>

    <div class="row">
		<div class="col-md-3" style="margin: 195px; margin-right:300px;">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Book Issued</div>
				<div class="card-body">
					<p class="card-text">No of book issued: <?php echo get_user_issue_book_count();?></p>
					<a class="btn btn-success" href="view_issued_book.php">View Issued Books</a>
				</div>
			</div>
            
		</div>
        
		<div class="col-md-3"></div>
        
		<div class="col-md-3"></div>
	</div>

  </div>
</body>
</html>