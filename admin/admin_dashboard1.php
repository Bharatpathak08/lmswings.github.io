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
    <title>Document</title>
    <link rel="stylesheet" href="../css/user dashboard.css">
    
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
  <div class="layout">
    <nav class="header" >
		<h4><a href="admin_dashboard.php">Library Wings</a></h4>
      <i class="fa fa-bars"></i>
	  
      <div class="header-user">
		
	  <i class="fas fa-user-circle icon" ></i>Welcome: <?php echo $_SESSION['name'];?><span style="margin-right:20px;"></span>
	  <i class="fas fa-user-circle icon"></i>Email: <?php echo $_SESSION['email'];?>
	  </div>
		
	  <ul class="nav navbar-nav navbar-right" style="display:flex; flex-direction:row;">
      <li class="nav-item"       style=" margin-right:30px;"
>
		        <a class="nav-link" href="view_profile.php">View Profile</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
	  
	</nav>

    <div class="sidebar" style="overflow-y:scroll;">
      <ul>
        <li> <a class="sidebar-list-item active" href="#"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        
        <li> <a class="sidebar-list-item" href="add_book.php"> <i class="fas fa-toolbox icon"></i><em>Add New Book</em></a>
        </li>
        <li> <a class="sidebar-list-item" href="add_book.php"> <i class="fas fa-toolbox icon"></i><em>Manage Books</em></a>
        </li>
        
        <li> <a class="sidebar-list-item" href="add_book.php"> <i class="fas fa-toolbox icon"></i><em>Add New Category</em></a>
        </li>
        <li> <a class="sidebar-list-item" href="add_book.php"> <i class="fas fa-toolbox icon"></i><em>Manage Category</em></a>
        </li>
        
        <li> <a class="sidebar-list-item" href="add_book.php"> <i class="fas fa-toolbox icon"></i><em>Add New Author</em></a>
        </li>
        <li> <a class="sidebar-list-item" href="add_book.php"> <i class="fas fa-toolbox icon"></i><em>Manage Author</em></a>
        </li>

        <li> <a class="sidebar-list-item" href="edit_profile.php"> <i class="fas fa-tasks icon"></i><em>Edit Profile</em></a></li>
        <li> <a class="sidebar-list-item" href="change_password.php"> <i class="fas fa-calendar icon"></i><em>Change Password</em></a>
        </li>
        <li> <a class="sidebar-list-item" href="issue_book.php"> <i class="fas fa-toolbox icon"></i><em>Issue a Books</em></a>
        </li>
        
      </ul>
    </div>

    <div class="row" style="margin-left: 305px">
		<div class="col-md" style="margin-top: 160px; ">
        <div class="card bg-light" style="width: 250px">
				<div class="card-header">Registered User</div>
				<div class="card-body">
					<p class="card-text">No. total Users: <?php echo get_user_count();?></p>
					<a class="btn btn-danger" href="Regusers.php" target="_blank">View Registered Users</a>
				</div>
			</div>
            
		</div>
        <div class="col-md" style="margin-top: 160px">
			<div class="card bg-light" style="width: 250px">
				<div class="card-header">Total Book</div>
				<div class="card-body">
					<p class="card-text">No of books available: <?php echo get_book_count();?></p>
					<a class="btn btn-success" href="Regbooks.php" target="_blank">View All Books</a>
				</div>
			</div>
		</div>
        <div class="col-md" style="margin-top: 70px">
			<div class="card bg-light" style="width: 250px">
				<div class="card-header">Book Categories</div>
				<div class="card-body">
					<p class="card-text">No of Book's Categories: <?php echo get_category_count();?></p>
					<a class="btn btn-warning" href="Regcat.php" target="_blank">View Categories</a>
				</div>
			</div>
		</div>
        
		
	</div>

   <div class="col">
        <div class="col-md" style="margin-top: 160px">
            <div class="card bg-light" style="width: 250px">
				<div class="card-header">Book Issued</div>
				<div class="card-body">
					<p class="card-text">No of book issued: <?php echo get_issue_book_count();?></p>
					<a class="btn btn-success" href="view_issued_book.php" target="_blank">View Issued Books</a>
				</div>
			</div>
		</div>
        <div class="col-md" style="margin-top: 70px">
            <div class="card bg-light" style="width: 250px">
				<div class="card-header">No. of Authors</div>
				<div class="card-body">
					<p class="card-text">No of Authors: <?php echo get_author_count();?></p>
					<a class="btn btn-primary" href="Regauthor.php" target="_blank">View Authors</a>
				</div>
			</div>
		</div>
		<div class="col-md"></div>
		<div class="col-md"></div>
	</div>

  </div>
</body>
</html>