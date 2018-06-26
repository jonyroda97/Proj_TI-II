<!DOCTYPE html>
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
    </style>
  </head>
  <body>

    <nav>
      <div class="menu">
        <ul>
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="hist.php">Sobre nós</a></li>
          <li><a>Conta</a>
            <ul>
              <li><a href="register.php">Registar</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </ul>
    </nav>
      <TABLE align="center"  border=0>
        <tr height=100>
          <TH><font size="20">Quem nós somos</font> </TH>
        </TR>
        <tr height=200>
          <td width="500">A viagem Cegonha é uma agência de viagens fundada em 1840
          na cidade de Lisboa, Portugal. Atualmente é considerada a mais antiga da sua
          indústria a nível mundial, sendo além disso, a empresa de maior dimensão
          que opera no setor de viagens e turismo em Portugal. Além das mais de 140
          lojas em Portugal e nas ilhas da Madeira e Açores, também atua em países como
          Angola, Brasil, Espanha, Inglaterra e Estados Unidos.</td>
        </TR>


      </TABLE>

    </body>
</html>
