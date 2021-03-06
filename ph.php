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
      table{
            margin-top: 2%;
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
      .button {
        background-color: #008CBA; /* Blue */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
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
          <li><a href="hist.php">Sobre nós</a></li>
          <li><a>Minha Conta</a>
            <ul>
              <li><a href="info.php">Ver Prefil</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
        </ul>
    </nav>

    <table align="center" border=0>
      <tr height=100>
        <th>
          <font size="20"> Hawaii</font>
        </th>
      <tr height=200>
        <td width="500">O ar fresco e floral, paisagens únicas e as águas quentes e tranquilas são o sonho de qualquer viajante,
          e a beleza natural é de cortar a respiração. Não há lugar no mundo como o Havai!… As seis ilhas são excepcionais e oferecem
          experiências distintas que seduzem qualquer viajante. Convidamo-lo a explorar as ilhas havaianas e a descobrir uma experiência
          de viagem ideal com a Malagueta.
          Descubra porque as seis ilhas do Aloha são a casa de tesouros inesquecíveis: os penhascos de Kauai, as praias fantásticas
          de Waikiki em Oahu, os quilómetros de areias brancas de Papohaku em Molokai, os golfinhos de Lanai e a cúpula do Haleakala
          em Maui…
          Destino de Sonho!…
          Férias no Havai são sinónimo de praia, um verde luxuriante e de ar puro, numa simbiose perfeita entre natureza e lazer, que
          marcam toda a família!BOA VIAGEM!
        </td>
      </tr>
      <tr>
        <td align="center">
          <a href="comprarbilhete.php?viagem=2">
            <input style="margin-top:30px" type="submit" class="button button-medium button-primary" value="comprar bilhete">
          </a>
        </td>
      </tr>
    </table>
  </body>
</htmL>
