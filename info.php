<html>
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
                <li><a href="resources/Logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
      </nav>
    </header>

    <table align="center" border="1">
      <tr height=50>
        <td width="200" align="center" colspan="1">Username</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr height=50>
        <td width="200" align="center" colspan="1">Email</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr height=50>
        <td width="200" align="center" colspan="1">Primeiro Nome</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr height=50>
        <td width="200" align="center" colspan="1">Último Nome</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr height=50>
        <td width="200" align="center" colspan="1">Número de Telemóvel</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr height=50>
        <td width="200" align="center" colspan="1">Localidade</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr height=50>
        <td width="200" align="center" colspan="1">Morada</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr height=50>
        <td width="200" align="center" colspan="1">Código Postal</td>
        <td width="200" colspan="1"></td>
      </tr>
      <tr>
        <td align="center"><a href=".php">Atualizar Informações</a></td>
        <td align="center"><a href=".php">Eliminar Conta</a></td>
      </tr>

      </table>
</body>
</html>
