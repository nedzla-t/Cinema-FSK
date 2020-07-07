<?php include('functions.php') 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prijava </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#000000, #1f1f1f);
}

.login-box {
  position: absolute;
  top: 60%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #ffffff;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #ffffff;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #ffffff,
              0 0 25px #ffffff,
              0 0 50px #ffffff,
              0 0 100px #ffffff;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #ffffff);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #ffffff);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 1px;
  background: linear-gradient(270deg, transparent, #ffffff);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 80%;
  background: linear-gradient(360deg, transparent, #ffffff);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}
.button {
  background-color: #e7e7e7; color: black;
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>
<body id="page1">
  <div id="main">
  <div id="header">
        <div class="row-1">
          <div class="fleft"><a href="#">Cinema <span>FSK</span></a></div>
          <ul>
            <li><a href="index.php"><img src="images/icon1-act.gif" alt="" /></a></li>
            <li><a href="contact-us.php">Kontakt <img src="images/icon2.gif" alt="" /></a></li>
          </ul>
        </div>
        <div class="row-2">
          <ul>
            <li><a href="index.php">Naslovna</a></li>
            <li><a href="najave.php">Najave</a></li>
            <li><a href="about-us.html">O nama</a></li>
            <li><a href="clanstvo.php">Clanstvo</a></li>
          </ul>
        </div>
      </div>
    <div class="login-box">
  <h2>Login</h2>
  <form method="post" action="login.php">
    <?php echo display_error(); ?>
    <div class="user-box">
      <input type="hidden" name="id">
      <input type="text" name="username">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password">
      <label>Password</label>
    </div>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="button" type="sumbit" name="login_btn">Login</button>
    <span></span>
      <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</div>


</body>
</html>