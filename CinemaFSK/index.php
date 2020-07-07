<?php
  include 'init.php';

  $id_film = $_GET['id_film'];
  $sql = "SELECT * FROM filmovi WHERE id_film=$id_film";
  $res = mysqli_query($db, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema FSK</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="tail-top">
  <div class="tail-bottom">
    <div id="main">
      <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Cinema <span>FSK</span></a></div>
          <ul>
            <li><a href="index.php"><img src="images/icon1-act.gif" alt="" /></a></li>
            <?php
            if(!empty($_SESSION['user'])){
              ?>
              <?php
              if($_SESSION['user']['user_type'] == 'admin'){
                ?>
                <li><a href="admin/home.php">ADMIN PANEL</a></li>
                <?php
              }
              ?>
              <li><a href="logout.php">LOGOUT</a></li>
              <?php
            }
            ?>
            <li><a href="contact-us.php">Kontakt <img src="images/icon2.gif" alt="" /></a></li>
            <li><a href="login.php">PrijavaIRegistracija <img src="" alt="" /></a></li>
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.php" class="active">Naslovna</a>
            </li>
            <li><a href="najave.php">Najave</a></li>
            <li><a href="onama.php">O nama</a></li>
            <li><a href="clanstvo.php">Clanstvo</a></li>
            <?php
            if(!empty($_SESSION['user'])){
              ?>
             <!--<li><a href="admin/view_users.php"></a></li> -->
              <li class="last"><a href="rezervacija.php">Rezervacija</a></li>
              <?php
            }
            ?>

          </ul>
        </div>
      </div>
      <div id="content">
        <div id="slogan">
          <div class="image png"></div>
          <div class="inside">
            <h2>We are breaking<span>All Limitations</span></h2>
            <p> Dođite do nas i uživajte u najnovijim projekcijama filmova i prepustite se filmskoj čaroliji!</p>
            <div class="wrapper"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
          </div>
        </div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                <h3>Dobrodosli u <b>Cinema</b> <span>FSK</span></h3>
        <div class="content">
          <h3> <span>Filmovi</span></h3>
          <ul class="movies">
              <?php
              $sql_film = "SELECT * FROM filmovi WHERE status='sada'";
              $rez_film = mysqli_query($db, $sql_film);
              while($red = mysqli_fetch_assoc($rez_film)){
                echo '<li class="last">';
                echo '<h4>' . $red['naziv_filma']. '</h4>';
                echo "<img src='{$red['slika']}' width='210pixels' height='190pixels' />";
                echo '<p>' . $red['sinopsis']. '</p>';
                echo '<div class="wrapper"><a href="detaljii.php?id_film=' . $red['id_film'] . '" class="link2"><span><span>Vise...</span></span></a></div>';
                echo '</li>';
            }
            ?>
            <li class="clear">&nbsp;</li>
          </ul>
      </div>
      <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf"><a href="index.php"><span class="fleft" style="color:darkred">NASLOVNA</span></a></p><br>
              <p class="rf" style="color:darkred"><a href="contact-us.html"><span class="fleft" style="color:darkred">KONTAKT</span></a></p>
              <p class="lf" style="color:darkred"><a href="najave.php"><span class="fleft" style="color:darkred">NAJAVE</span></a></p><br>
              <p class="lf" style="color:darkred"><a href="onama.php"><span class="fleft" style="color:darkred">O NAMA</span></a></p>
              <p class="rf" style="color:darkred"><a href="clanstvo.php"><span class="fleft" style="color:darkred">CLANSTVO</span></a></p><br>
              <p class="rf" style="color:darkred"><a href="login.php"><span class="fleft" style="color:darkred">PRIJAVA</span></a></p><br>
              <p class="rf" style="color:darkred"><a href="register.php"><span class="fleft" style="color:darkred">REGISTRACIJA</span></a></p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
              <div class="right">
              <div class="footerlink">
              <p class="rf"><h4 align="right">Gdje nas mozete naci:</h4> </p>
              <p class="rf"><a href="https://www.facebook.com/CFSK"><span class="fleft" style="color:blue">Facebook</span></a></p><br>
              <p class="rf"><a href="https://twitter.com/CFSK"><span class="fleft" style="color:darkblue">Twitter</span></a></p><br>
              <p class="rf"><a href="https://instagram.com/CFSK"><span class="fleft" style="color:purple">Instagram</span></a></p><br>
              <p class="rf"><a href="https://www.youtube.com/user/CFSK"><span class="fleft" style="color:red">Youtube</span></a></p><br>
              <p class="lf">Copyright &copy; 2020 <a href="#">CINEMA FSK</a> - All Rights Reserved</p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>