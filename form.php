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
  	<h2>Formulário</h2>
  </div>

  <form method="post" action="form.php">

    <div class="input-group">
  	  <label>Primeiro Nome</label>
  	  <input type="text" name="prim">
  	</div>
  	<div class="input-group">
  	  <label>Último Nome</label>
  	  <input type="text" name="ult">
  	</div>
  	<div class="input-group">
  	  <label>Morada</label>
  	  <input type="text" name="morada">
  	</div>
  	<div class="input-group">
  	  <label>Localidade</label>
  	  <input type="text" name="local">
  	</div>
    <div class="input-group">
  	  <label>Código Postal</label>
  	  <input type="text" name="zip">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="sub">Submeter</button>
  	</div>

  </form>
</body>
</html>
