<?php
  $succes_msg = $error_msg = '';
  include 'init.php';
  session_start();

  if (isset($_POST['add'])) {
       $id_user = $_POST['id_user'];
       $naziv_filma = $_POST['naziv_filma'];
       $datum = $_POST['datum'];
       $termin = $_POST['termin'];
       $br_karata = $_POST['br_karata'];
      
      $sql ="INSERT INTO Rezervacije (naziv_filma, datum, termin, br_karata, id_user)VALUES('".$naziv_filma."','".$datum."','".$termin."','".$br_karata."', '".$id_user."')";

      $rez = mysqli_query($db, $sql);
      $rez = mysqli_query($db, $sql);
      $br_provjeri= "select count(*) from rezervacije where br_karata='".$br_karata."' ";
      $provjeri=mysqli_query($db,$br_provjeri);
      $br_prebroj=mysqli_fetch_array($provjeri,MYSQLI_NUM);
       $prebroj=$br_prebroj[0];

     if(!$rez or $br_karata>10){ die("Upis u bazu nije uspio. Sva mjesta su rezervisana :(" . mysqli_error($db)); }else{ echo "<p style='color:green; margin-top:10px;'>Uspješna rezervacija</p>"; }
  }

?>
<?php
  include 'init.php';

  $id_film = $_GET['id_film'];
  $sql = "SELECT * FROM filmovi WHERE id_film=$id_film";
  $res = mysqli_query($db, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World | Rezervacija</title>
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
            <li><a href="index.php">Naslovna</a>
            </li>
            <li><a href="najave.php">Najave</a></li>
            <li><a href="onama.php">O nama</a></li>
            <li><a href="clanstvo.php">Clanstvo</a></li>
            <?php
            if(!empty($_SESSION['user'])){
              ?>
              <li class="last"><a href="rezervacija.php" class="active">Rezervacija</a></li>
              <?php
            }
            ?>

          </ul>
        </div>
      </div>
      <div id="content">
        <div class="line-hor"></div>
        <div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner"> <br>
                <h3>Rezervacija <span>karta</span></h3>
                <hr>
                <form action="" method="POST">
                  <p style="color:green"><?php echo $succes_msg; ?></p>
                  <p style="color:red"><?php echo $error_msg; ?></p>
                  <div class="form-group">
                    <label class="label-post">Naziv filma </label><input type="text" name="naziv_filma" value="<?php if (isset($_SESSION['naziv_filma'])) { echo $_SESSION['naziv_filma']; }?>"/>
                  </div><br>
                  <div class="form-group">
                    <label class="label-post">Datum </label><input name="datum" type="date" value="<?php if (isset($_SESSION['datum'])) { echo $_SESSION['datum']; }?>"//>
                  </div><br>
                  <div class="form-group">
                    <label class="label-post">Termin </label><input type="time" name="termin"  value="<?php if (isset($_SESSION['termin'])) { echo $_SESSION['termin']; }?>"//>
                  </div><br>
                  <div class="form-group">
                    <label class="label-post">Broj karata </label><input type="number" name="br_karata" value="<?php if (isset($_SESSION['br_karata'])) { echo $_SESSION['br_karata']; }?>"//>
                  </div><br>
                  <div class="form-group">
                    <label class="label-post">Vaš ID </label><input name="id_user" type="text" value="<?php if(isset($_SESSION['id_user'])){ echo $_SESSION['id_user']; } ?>"//>
                  </div> <br><br>
                  <div class="form-group>">
                    <input type="submit" name="add" class="login-button add-post" value="Rezervisi">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>