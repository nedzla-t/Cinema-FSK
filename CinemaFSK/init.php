<?php
  error_reporting(E_ALL | E_STRICT);
	ini_set("display_errors", 0);
	ini_set("log_errors", 1);
	ini_set("error_log", "logs.log");

  //instace of mysqli
  $db = mysqli_connect("localhost", "root", "", "kino_login");

  //sesija korisnik sistema, inicijalizovanje user sesije
  session_start();
  if(!isset($_SESSION['user'])){
    $_SESSION['user'] = array();
  }
 ?>
