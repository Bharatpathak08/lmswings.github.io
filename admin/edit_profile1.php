<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
			  
			  <li class="nav-item dropdown " style=" margin-right:10px; ">
			  <div class="dropdown ">
  <button class="dropbtn gradient-text active1" style="font-weight:700;">Profile</button>
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

        <li style="margin-top:-5px;"> <a class="sidebar-list-item active" href="edit_profile1.php"> <i class="fas fa-tasks icon"></i><em>Edit Profile</em></a></li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="change_password1.php"> <i class="fas fa-calendar icon"></i><em>Change Password</em></a>
        </li>
        <li style="margin-top:-5px;"> <a class="sidebar-list-item" href="issue_book1.php"> <i class="fas fa-toolbox icon"></i><em>Issue a Book</em></a>
        </li>
        
      </ul>
    </div>
    <main class="content">
      <div class="main-header">
        <div class="main-title">
          <h1>Admin Profile Detail</h1>
        </div>
        <div class="main-form">
          <form name="event" action="update.php" method="post">
            <input type="text" name="name" id="ftitle" value="<?php echo $name;?>" >
            <input type="text" name="email" id="fdescription" value="<?php echo $email;?>" >
            <input type="text" name="mobile" id="flocation" value="<?php echo $mobile;?>" >
           
            <input type="submit" name="update" id="fsubmit" value="Update" class="button">

          </form>
        </div>
      </div>
    </main>
  </div>
</body>
</html>