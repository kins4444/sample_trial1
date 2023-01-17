<?php include('https://kins4444.github.io/sample_trial1/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="https://kins4444.github.io/sample_trial1/style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="https://kins4444.github.io/sample_trial1/login.php">
  	<?php include('https://kins4444.github.io/sample_trial1/errors.php'); ?>
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
  		Not yet a member? <a href="https://kins4444.github.io/sample_trial1/register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
