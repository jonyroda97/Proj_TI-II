<!DOCTYPE html>
<?php
  session_start();
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="resources/style.css">
    <style>
      body{
        background-image: url(resources/b.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Verdana;
        font-size: 20px;
        margin: 0;
        line-height: 24px;
      }

      /* Dropdown Button */
      .dropbtn {
          background-color: #008CBA;
          background: white;
          color: black;
          padding: 13px 5px;
          font-size: 16px;
          cursor: pointer;
          border: 1px solid gray;
          border-radius: 5px;
          width: 104%;
      }

      /* Dropdown button on hover & focus */
      .dropbtn:hover, .dropbtn:focus {
          background-color: #2980B9;
      }

      .dropbtnoption {
        background-color: #2980B9;
      }

      /* The container <div> - needed to position the dropdown content */
      .dropdown {
          position: relative;
          display: inline-block;
          width: 93%;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 100px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      /* Links inside the dropdown */
      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }

      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {background-color: #ddd}

      /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
      .show {display:block;}

    </style>
  </head>

  <!--
  https://www.w3schools.com/howto/howto_js_dropdown.asp
  https://www.daftlogic.com/information-programmatically-preselect-dropdown-using-javascript.htm
  https://www.w3schools.com/php/php_superglobals.asp
  -->


  <body>

    <div class="header">
    	<h2>Confirmação de Compra</h2>
    </div>

    <form method="post" action="inicio2.php">
      <div class="input-group">
    	  <label>Primeiro Nome</label>
    	  <input type="text" name="prim" disabled value="<?php echo $_SESSION['prim'];?>">
    	</div>
    	<div class="input-group">
    	  <label>Último Nome</label>
    	  <input type="text" name="ult" disabled value="<?php echo $_SESSION['ult'];?>">
    	</div>
      <br>
      <div class="input-group">
    	  <label>Número Telemóvel</label>
    	  <input type="text" name="telm" disabled value="<?php echo $_SESSION['telm'];?>">
    	</div>
    	<div class="input-group">
    	  <label>Morada</label>
    	  <input type="text" name="morada" disabled value="<?php echo $_SESSION['morada'];?>">
    	</div>
    	<div class="input-group">
    	  <label>Localidade</label>
    	  <input type="text" name="local" disabled value="<?php echo $_SESSION['local'];?>">
    	</div>
      <div class="input-group">
    	  <label>Código Postal</label>
    	  <input type="text" name="zip" disabled value="<?php echo $_SESSION['zip'];?>">
    	</div>
      <br>
      <div class="input-group">
        <div class="dropdown" height=156px>
          <label>Viagem</label>
          <select class="dropbtn" id="dropbtn" name="dropbtn">
            <option value="1">Grécia</option>
            <option value="2">Hawaii</option>
            <option value="3">Londres</option>
            <option value="4">Marrocos</option>
            <option value="5">Maiorca</option>
            <option value="6">Veneza</option>
          </select>
        </div>
      </div>
    	<div class="input-group">
    	  <button type="submit" class="btn" name="sub">Submeter</button>
    	</div>
    </form>

    <script>

      var viagem = "<?php echo $_GET['viagem']; ?>";

      function setSelectedIndex(s){
        s.options[viagem-1].selected = true;
        return;
      }

      setSelectedIndex(document.getElementById("dropbtn"));

    </script>

  </body>
</html>
