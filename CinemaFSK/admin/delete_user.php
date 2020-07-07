<?php
	include('../functions.php');
	
	$id = $_GET['id'];
	
	$delete_user = mysqli_query($db, "DELETE FROM users WHERE id=$id");
	
	header("Location:home.php");

?>