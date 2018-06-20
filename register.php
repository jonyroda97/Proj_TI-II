<?php include('resources/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="resources/style.css">
  <style>
   	body{
        background-image: url(resources/b.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    	}

    </style>
</head>
<body>
  <div class="header">
  	<h2>Registar</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('resources/errors.php'); ?>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmar password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registar</button>
  	</div>
  	<p>
  		Já tem conta? <a href="login.php">Entrar</a> &ensp;
  		Página inicial <a href="inicio.php">voltar</a>
  	</p>
  </form>
</body>
</html>
