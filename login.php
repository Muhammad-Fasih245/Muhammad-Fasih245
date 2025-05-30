<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
        <div class="logo">
            <h1>Gradify</h1>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="sky.php">Grade Tracker</a></li>
            <li><a href="about1.html">About</a></li>
            <li><a href="contact1.html">Contact</a></li>
        </ul>
    </nav>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
