<?php
   include 'functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cinema World | O nama</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page2">
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
            <li><a href="onama.php" class="active">O nama</a></li>
            <li><a href="clanstvo.php">Clanstvo</a></li>
            <?php
            if(!empty($_SESSION['user'])){
              ?>
              <li class="last"><a href="rezervacija.php">Rezervacija</a></li>
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
              <div class="inner">
                <h3>O <span>nama</span></h3>
                <p class="p1">Dvorane su vrhunsko tehnički opremljene i gledateljima osiguravaju pravi užitak gledanja filma sa "wall to wall" platnima, uz Dolby Digital DTS zvučnim sistemom. Anatomska sjedišta u dvoranama su amfiteatarski raspoređena, s postoljem za odlaganje čaša ili kokica, a razmak između redova iznosi 1,2 metara. </br>
                  Posebnu ponudu čine "ljubavna sjedala" koja zauzimaju 5% ukupnog kapaciteta svake dvorane.</br>Prije početka filma posjetitelji se mogu počastiti kokicama, grickalicama, slatkišima, i pićem na koncesijama koje se nalaze u prizemlju, a druženje poslije filma nastaviti u Cinema City Baru na prvom spratu. </br>Svakog četvrtka Cinema City nudi novi kino program. </br>U svakodnevnim brojnim projekcijama filmova, od najvećih svjetskih hitova do art filmova, posjetitelji mogu uživati od 14.00 do 23.00 sata. </br>Vikendom su na kino programu matineje na kojima prikazujemo filmove za djecu ali i cijelu obitelj, s početkom u 11.00 sati. </br>Za ljubitelje pretpremijera prikazujemo ih svakog petka i subote u 24.00 sata..</p>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <h3>Nase <span> usluge</span></h3>
          <ul class="list">
            <li><img src="" alt="" /><a href="#">SKOLSKE PROJEKCIJE</a><br />
              Cursustellentesque enim justo vestasse vitae trices phasellus leo sociis leo magnisl. Malestibulusnatis quisque felit odio ut nunc convallis semper sente ris feugiat.</li>
              <li><img src="" alt="" /><a href="#">STUDENTSKI DAN</a><br />
              Cursustellentesque enim justo vestasse vitae trices phasellus leo sociis leo magnisl. Malestibulusnatis quisque felit odio ut nunc convallis semper sente ris feugiat.</li>
            <li><img src="" alt="" /><a href="#">LADIES NIGHT</a><br />
              Cursustellentesque enim justo vestasse vitae trices phasellus leo sociis leo magnisl. Malestibulusnatis quisque felit odio ut nunc convallis semper sente ris feugiat.</li>
            <li><img src="" alt="" /><a href="#">MEN'S NIGHT</a><br />
              Cursustellentesque enim justo vestasse vitae trices phasellus leo sociis leo magnisl. Malestibulusnatis quisque felit odio ut nunc convallis semper sente ris feugiat.</li>
          </ul>
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