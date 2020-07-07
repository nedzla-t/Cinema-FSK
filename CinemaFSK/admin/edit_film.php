<?php
	$msg = $msg_error = '';
	include '../init.php';
		
		$id_film = $_GET['id_film'];
		$sql = "SELECT * FROM filmovi WHERE id_film=$id_film";
		$rez = mysqli_query($db, $sql);
		$row = mysqli_fetch_assoc($rez);

		if (isset($_POST['update'])) {
			
			$naziv_filma = $_POST['naziv_filma'];
			$sinopsis = $_POST['sinopsis'];
			$tip = $_POST['tip'];
			$reditelj = $_POST['reditelj'];
			$uloge = $_POST['uloge'];
			$trajanje = $_POST['trajanje'];
            $termini = $_POST['termini'];

			if(!empty($naziv_filma) && !empty($sinopsis) && !empty($tip) && !empty($reditelj) && !empty($uloge) && !empty($trajanje) && !empty($termini)){
				
				$sql = "UPDATE filmovi SET naziv_filma='$naziv_filma', sinopsis='$sinopsis', tip='$tip' , reditelj='$reditelj', uloge='$uloge', trajanje='$trajanje', termini='$termini' WHERE id_film=$id_film";
				$result = mysqli_query($db, $sql);
				if ($result) {
					
					$msg = 'Post successfully updated.';
					$sql = "SELECT * FROM filmovi WHERE id_film=$id_film";
					$rez = mysqli_query($db, $sql);
					$row = mysqli_fetch_assoc($rez);
				}
				
			}else{
				
				$msg_error = "All fields are required!";
				
			}
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Biblioteka</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="home.php">Home</a>
		</div>
	</nav>
	<div class="container">
		<h2>Edit film</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"><?php echo $msg; ?></p>
        	<p class="post-error"><?php echo $msg_error; ?></p>
            <div class="form-group">
                <label class="label-post">Nziv filma</label><input type="text" name="naziv_filma" value="<?php echo $row['naziv_filma']; ?>"/>
            </div>
            <div class="form-group">
            	<label class="label-post">Sinopsis</label>
            	<textarea type="text" name="sinopsis" rows="10" cols="80"><?php echo $row['sinopsis']; ?></textarea>
            </div>
            <div class="form-group">
            	<label class="label-post">Žanr</label><input type="text" name="tip" value="<?php echo $row['tip']; ?>" />
            </div>
            <div class="form-group">
                <label class="label-post">Reditelj</label><input type="text" name="reditelj" value="<?php echo $row['reditelj']; ?>" />
            </div>
            <div class="form-group">
                <label class="label-post">Uloge</label><input type="text" name="uloge" value="<?php echo $row['uloge']; ?>" />
            </div>
            <div class="form-group">
                <label class="label-post">Trajanje</label><input type="text" name="trajanje" value="<?php echo $row['trajanje']; ?>" />
            </div>
            <div class="form-group">
                <label class="label-post">Termini</label><input type="text" name="termini" value="<?php echo $row['termini']; ?>" />
            </div>
            <div class="form-group>">
                <input type="submit" name="update" class="login-button add-post" value="Update film">
            </div>
            <p>Back to <a href="home.php" >Admin panel</a></p>
        </form>
    </div>
</body>
</html>