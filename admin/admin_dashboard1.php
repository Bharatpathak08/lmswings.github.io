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
    <title>Admin Dashboard</title>
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
		        <a class="nav-link active1" href="../logout.php">Logout</a>
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
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="manage_author1.php"> <i class="fas fa-toolbox icon"></i><em>Manage Author</em></a>
        </li>

        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="edit_profile1.php"> <i class="fas fa-tasks icon"></i><em>Edit Profile</em></a></li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="change_password1.php"> <i class="fas fa-calendar icon"></i><em>Change Password</em></a>
        </li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="issue_book1.php"> <i class="fas fa-toolbox icon"></i><em>Issue a Book</em></a>
        </li>
        
      </ul>
    </div>

    <div class="row" style="margin-left: 305px; min-height:695px;">
		<div class="col-md" style="margin-top: 160px; ">
        <div class="card  bg-dark text-light" style="width: 250px">
				<div class="card-header">Registered User</div>
				<div class="card-body">
					<p class="card-text">No. total Users: <?php echo get_user_count();?></p>
					<a class="btn btn-danger" href="Regusers1.php"  >View Registered Users</a>
				</div>
			</div>
            
		</div>
        <div class="col-md" style="margin-top: 160px">
			<div class="card  bg-dark text-light" style="width: 250px">
				<div class="card-header">Total Book</div>
				<div class="card-body">
					<p class="card-text">No of books available: <?php echo get_book_count();?></p>
					<a class="btn btn-secondary" href="Regbooks1.php"  >View All Books</a>
				</div>
			</div>
		</div>
        <div class="col-md" style="margin-top: -20px">
			<div class="card  bg-dark text-light" style="width: 250px">
				<div class="card-header">Book Categories</div>
				<div class="card-body">
					<p class="card-text">No of Book's Categories: <?php echo get_category_count();?></p>
					<a class="btn btn-info" href="Regcat1.php"  >View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md" style="margin-top: -24px">
            <div class="card  bg-dark text-light" style="width: 250px">
				<div class="card-header">Book Not Returned</div>
				<div class="card-body">
					<p class="card-text">No of book not returned: <?php echo get_not_return_book_count();?></p>
					<a class="btn btn-warning" href="view_not_return_book1.php"  >View Not Returned Books</a>
				</div>
			</div>
		</div>
        
		
	</div>

   <div class="col">
        <div class="col-md" style="margin-top: 45px">
            <div class="card  bg-dark text-light" style="width: 250px">
				<div class="card-header">Book Issued</div>
				<div class="card-body">
					<p class="card-text">No of book issued: <?php echo get_issue_book_count();?></p>
					<a class="btn btn-primary" href="view_issued_book1.php"  >View Issued Books</a>
				</div>
			</div>
		</div>
		
        <div class="col-md" style="margin-top: 90px">
            <div class="card  bg-dark text-light" style="width: 250px">
				<div class="card-header">No. of Authors</div>
				<div class="card-body">
					<p class="card-text">No of Authors: <?php echo get_author_count();?></p>
					<a class="btn btn-success" href="Regauthor1.php"  >View Authors</a>
				</div>
			</div>
		</div>
		<div class="col-md"></div>
		<div class="col-md"></div>
	</div>

  </div>
</body>
</html>