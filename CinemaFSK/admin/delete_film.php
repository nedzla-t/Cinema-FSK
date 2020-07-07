<?php

		include '../init.php';

		$id_film = $_GET['id_film'];

		$result = mysqli_query($db, "DELETE FROM filmovi WHERE id_film=$id_film");

		header("Location: home.php");
	
?>