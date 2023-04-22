<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <script scr="js/login.js"></script>
	<link rel="stylesheet" href="css/navbar.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="js/navbar.js"></script>

</head>
<body>
	<!-- header section starts  -->
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="index.php">Library Wings</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="admin-login1.php" href=""><i class="fas fa-tachometer-alt"></i>Admin Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../login1.php"><i class="far fa-address-book"></i>User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../signup2.php" href=""><i class="far fa-clone"></i>Register</a>
                </li>
                
            </ul>
        </div>
    </nav>
    <!-- header section ends -->
	<img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png">
	
	<div class="container">
		<div class="img">
			<img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post">
				<img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" type="text" name="email" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<a href="signup.php">Not registered yet ?</a>
            	<input type="submit" class="btn" name="login" value="Login">
            </form>

			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								header("Location: admin_dashboard1.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
			
        </div>
    </div>
    
</body>
</html>