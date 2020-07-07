<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<?php
  include '../init.php';    
  if(isset($_GET['filter'])){
    $tip = $_GET['filter'];
    $sql = "SELECT * FROM filmovi WHERE tip=$tip";    
    $result = mysqli_query($db, $sql);  
  }else{
    $sql = "SELECT * FROM filmovi";
    $result = mysqli_query($db, $sql);
  }
  
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="admin.css">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<title>Filmovi</title>
</head>
<body>
  <nav>
    <div class="logout">
      <a href="../index.php">Naslovna</a>
    </div>
  </nav>
  <div class="container">
    <br>
    <h2>Pregled filmova</h2>
    <div class="left">
      <a class="addbutton" href="create_film.php">Novi film</a>
    </div>
    <div class="right">
     <!-- <form action="" method="get">
        <input type="submit" name="filter" class="addbutton" value="Filter">
        <select name="filter">
          <option value="Drama">Drama</option>
          <option value="SF">SF</option>
          <option value="Komedija">Komedija</option>
          <option value="Akcija">Akcija</option>
        </select>
      </form> -->
    </div>
    <table>
      <tr>
        <th>Naziv filma</th>
        <!--<th>Žanr</th> -->
        <th>Reditelj</th>
        <th style="width: 178px;">Action</th>
      </tr>
      <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <tr>
        <td><?php echo $row["naziv_filma"]; ?></td>
        <!--<td><?php echo ($row["tip"] == 'Drama') ? 'Drama' : (($row["tip"] == 'SF') ? 'SF' : (($row["tip"] == 'Komedija') ? 'Komedija' : (($row["tip"] == 'Akcija') ? 'Akcija' : 'Other'))); ?></td> -->
        <td><?php echo $row["reditelj"]; ?></td>
        <td>
          <a class="editbutton" href="edit_film.php?id_film=<?php echo $row['id_film']; ?>">Edit</a>
          <a class="viewbutton" href="view_film.php?id_film=<?php echo $row['id_film']; ?>">View</a>
          <a class="deletebutton" href="delete_film.php?id_film=<?php echo $row['id_film']; ?>">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <br><br>
  <div class="container">
    <h2>Pregled korisnika</h3>
      <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="home.php?logout='1'" style="color: red;">logout</a>
          </small>

        <?php endif ?>
      </div>
    </div>
    <div class="left">
      <a class="addbutton" href="create_user.php">+ add user</a>
    </div>
    <br>
    <div class="right">
    </div>
    <table>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th style="width: 178px;">Action</th>
      </tr>
      <?php
      $sql_users = "SELECT * FROM users";
      
      $rez_users = mysqli_query($db, $sql_users);
      
      while($red = mysqli_fetch_assoc($rez_users)){
        echo '<tr>';
          echo '<td style="text-align:center;">' . $red['id'] . '</td>';
          echo '<td>' . $red['username'] . '</td>';
          echo '<td width="178" text-align="center"><a class="deletebutton" href="delete_user.php?id='.$red['id'].'">Delete</a> <a class="viewbutton" href="view_users.php?id='.$red['id'].'">View</a></td>';
        echo '</tr>';
      }
    
    ?>
    </table>
    <p><?= $search_rs['username']; ?></p>
  </div> <br>
  <div class="container">
    <h2>Pregled rezervacija</h3>
  <div class="right">
    </div>
    <table>
      <tr>
        <th>ID User</th>
        <th>Naziv filma</th>
        <th>Datum</th>
        <th style="width: 178px;">Action</th>
      </tr>
      <?php
      $sql_rez = "SELECT * FROM rezervacije";
      
      $rez = mysqli_query($db, $sql_rez);
      
      while($red = mysqli_fetch_assoc($rez)){
        echo '<tr>';
          echo '<td style="text-align:center;">' . $red['id_user'] . '</td>';
          echo '<td>' . $red['naziv_filma'] . '</td>';
          echo '<td>' . $red['datum'] . '</td>';
          echo '<td width="178" text-align="center"><a class="deletebutton" href="delete_rez.php?id_rezervacije='.$red['id_rezervacije'].'">Delete</a> <a class="viewbutton" href="view_rez.php?id_rezervacije='.$red['id_rezervacije'].'">View</a></td>';
        echo '</tr>';
      }
    
    ?>
    </table>
  </div>
<p><a href="home.php">Na vrh</a></p>
</body>
</html>