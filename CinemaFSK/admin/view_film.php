<?php
	
	include('../init.php');
	
	$id_film = $_GET['id_film'];
	
	$sql_view = "SELECT * from filmovi where id_film=$id_film";
	
	$rez_view = mysqli_query($db, $sql_view);
	
	while($red = mysqli_fetch_assoc($rez_view)){
        echo '<table>';
		echo '<p>'.'<b>Naziv filma:</b>'. $red['naziv_filma'] . '</p>';
		echo '<p>'.'<b>Sinopsis:</b>' . $red['sinopsis'] . '</p>';
		echo '<p>'.'<b>Žanr:</b>'. $red['tip'] . '</p>';
		echo '<p>'.'<b>Reditelj:</b>'. $red['reditelj'] . '</p>';
		echo '<p>'.'<b>Uloge:</b>'. $red['uloge'] . '</p>';
		echo '<p>'.'<b>Trajanje:</b>'. $red['trajanje'] . '</p>';
		echo '<p>'.'<b>Termini:</b>'. $red['termini'] . '</p>';
		echo '</table';
	}


?>
<p>Back to <a href="home.php">Admin panel</a></p> 