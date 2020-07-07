<?php
	
	include('../functions.php');
	
	$id = $_GET['id'];
	
	$sql_view = "SELECT * from users where id=$id";
	
	$rez_view = mysqli_query($db, $sql_view);
	
	while($red = mysqli_fetch_assoc($rez_view)){

		echo '<p>'.'<b>Username:</b>'. $red['username'] . '</p>';
		echo '<p>'.'<b>Kategorija:</b>' . $red['user_type'] . '</p>';
		echo '<p>'.'<b>Email:</b>'. $red['email'] . '</p>';
		echo '</table';
	}


?>