<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into contact values('','$_POST[name]','$_POST[email]','$_POST[query]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Query sent...Your query will be resolved soon !!");
	window.location.href = "index.php";
</script>