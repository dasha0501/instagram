<?php 
	$con = mysqli_connect("127.0.0.1", "root", "","instagram");
	$query = "DELETE FROM posts WHERE id = '" . $_GET["idid"] . "'";
	mysqli_query($con, $query);
	header("location: index.php")
	
?>