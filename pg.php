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
    </style>
  </head>
  <body>

    <nav>
      <div class="menu">
        <ul>
          <li><a href="inicio2.php">Inicio</a></li>
          <li><a>Viajar</a>
            <ul>
              <li><a href="guialocais.php">Destinos</a></li>
            </ul>
          <li><a href="contactos.php">Contactos</a></li>
          <li><a>Minha Conta</a>
            <ul>
              <li><a href="info.php">Ver Prefil</a></li>
              <li><a href="inicio.php">Logout</a></li>
            </ul>
        </ul>
    </nav>
      <TABLE align="center"  border=0>
        <tr height=100>
          <TH><font size="20"> Grécia</font> </TH>
        </TR>
        <tr height=200>
          <td width="500">As ilhas gregas são uma optima opção de férias.
                          O clima na Grécia é sensacional e as praias lindas de água azul-turquesa são incomparáveis.
                          As paisagens típicas e as belas ruínas da antiguidade dão todo o charme dessas terras!!!
                          Na verdade não é todo dia que estamos de frente para construções ou ruínas de mais de 3.000 anos de idade!!!!
                          Se voce está interessado em férias que misturem todas essas opções de lazer, relax, cultura e vida noturna,
                          já encontrou a próxima parada! Escolha as ilhas que mais combinam com voce e BOA VIAGEM!!!</td>
        </TR>
        <tr>
          <td align="center"><a href="comprabilhete.php">Comprar bilhete </a></td>
        </tr>

      </TABLE>

    </body>
</html>
