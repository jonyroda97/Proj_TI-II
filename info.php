<?php
session_start();
?><html>
<head>
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
    .menu{
      text-align: center;
      width: 100%;
      background: blue;
      opacity: 0.7;
    }
    .menu ul{
      margin: 0;
      padding: 0;
      list-style: none;
      position: relative;
    }
    .menu ul li a{
      display: block;
      padding: 25px;
      color: white;
      text-decoration: none;
      width: 150px;
    }
    .menu ul:after{
      content: ""; clear: both;
      display: block;
    }
    .menu ul li{
      float: left;
      list-style: none;
    }
    .menu ul ul{
      display: none;
    }
    .menu ul li:hover > ul{
      display: block;
    }
    .menu ul li:hover {
      background: black;
      transition: 0.9s;
    }
    .menu ul li:hover a{
      color: white;
    }
    .menu ul ul{
      background: black
      padding: 0;
      margin: 0;
      position: absolute; top: 100%;
    }
    .menu ul ul li{
      float: none;
      position: relative;
    }
    .menu ul ul li a{
      padding: 25px;
      color: white;
      width: 300px;
      text-align: left;
    }
    .menu ul ul li a:hover{
      background: lightblue;
      color: black;
      transition: 0.9s;
    }
     table{
          margin-top: 8%;
    }
  </style>
</head>
  <body>
    <header>
      <nav>
        <div class="menu">
          <ul>
            <li><a href="inicio2.php">Inicio</a></li>
            <li><a>Viajar</a>
              <ul>
                <li><a href="guialocais.php">Destinos</a></li>
              </ul>
            </li>
            <li><a href="contactos.php">Contactos</a></li>
            <li><a>Minha Conta</a>
              <ul>
                <li><a href="info.php">Ver Prefil</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
      </nav>
    </header>

    <center>
      <table border="2" bgcolor="silver" cellpadding="20">
        <tr>
          <th>Username</th>
          <td width="250"><?php echo $_SESSION['username'];?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $_SESSION['email'];?></td>
        </tr>
        <tr>
          <th>Pimeiro Nome</th>
          <td><?php echo $_SESSION['prim'];?></td>
        </tr>
        <tr>
          <th>Último Nome</th>
          <td><?php echo $_SESSION['ult'];?></td>
        </tr>
        <tr>
          <th>Número Telemóvel</th>
          <td><?php echo $_SESSION['telm'];?></td>
        </tr>
        <tr>
          <th>Morada</th>
          <td><?php echo $_SESSION['morada'];?></td>
        </tr>
        <tr>
          <th>Localidade</th>
          <td><?php echo $_SESSION['local'];?></td>
        </tr>
        <tr>
          <th>Código Postal</th>
          <td><?php echo $_SESSION['zip'];?></td>
        </tr>
      </table>
    </center>
  </body>
</html>
