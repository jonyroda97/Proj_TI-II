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
          <font size="20"> Londres </font>
        </th>
      <tr height=200>
        <td width="500">Londres é hoje uma cidade vibrante, com um enorme conjunto de atrações
          que não se esgota numa breve visita à cidade.Londres é daqueles destinos que pode ser
          visitado em qualquer época do ano. No entanto, se tivermos que escolher a época ideal,
          a Primavera é o período de eleição. Entre meados de março e maio, as temperaturas são
          relativamente amenas e os parques e os jardins floridos ganham um encanto especial.
          Os meses de Verão e as épocas de Natal e do Ano Novo são consideradas como época alta e,
          por isso, os preços dos hotéis e das passagens aéreas ficam inflacionados. Se pretender
          viajar nestes períodos é aconselhável fazer a reserva da viagem com a maior antecedência
          possível para garantir preços mais em conta.BOA VIAGEM
        </td>
      </tr>
      <tr>
        <td align="center">
          <a href="comprarbilhete.php">
            <input style="margin-top:30px" type="submit" class="button button-medium button-primary" value="comprar bilhete">
          </a>
        </td>
      </tr>
    </table>

  </body>
</htmL>
