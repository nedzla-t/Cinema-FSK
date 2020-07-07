<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registracija</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
<body>
	<div class="login-box">
		<h2>Register</h2>
		<form method="post" action="register.php">
			<?php echo display_error(); ?>
      <div class="user-box">
        <input type="number" name="id" value="<?php echo $id; ?>">
        <label>ID</label>
        </div>
			<div class="user-box">
				<input type="text" name="username" value="<?php echo $username; ?>">
				<label>Username</label>
		    </div>
		    <div class="user-box">
			    <input type="email" name="email" value="<?php echo $email; ?>">
			    <label>Email</label>
			</div>
			<div class="user-box">
				<input type="password" name="password_1">
				<label>Password</label>
			</div>
			<div class="user-box">
				<input type="password" name="password_2">
				<label>Confirm password</label>
			</div>
			<span></span>
			<span></span>
            <span></span>
            <span></span>
            <button class="button" type="submit" class="btn" name="register_btn">Register</button>
            <span></span>
            <p>
            	Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>    
</body>
</html>