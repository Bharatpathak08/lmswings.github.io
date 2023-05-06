<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");

	$name=$_POST['name'];
	$from=$_POST['email'];
	$query=$_POST['query'];
	$to = "bharat9409pathak@gmail.com";
$subject = "Query from ". $name;
$headers = "From: " . $from ;


mail($to,$subject,$query,$headers);

// $query = "insert into contact values('','$_POST[name]','$_POST[email]','$_POST[query]')";
// $query_run = mysqli_query($connection,$query);


// ?>
// <script type="text/javascript">
// 	alert("Query sent...Your query will be resolved soon !!");
// 	window.location.href = "index.php";
// </script>