<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
   	body{
        background-image: url(b.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    	}

    </style>
</head>
<body>
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
  		Não tem conta? <a href="register.php">Registar</a> &ensp;
  		Página inicial <a href="inicio.php">voltar</a>
  	</p>
  </form>
</body>
</html>
