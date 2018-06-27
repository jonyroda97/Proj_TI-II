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
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
      </nav>
    </header>
    <?php
    include('resources/server.php');
    $link = mysqli_connect("localhost", "root", "", "registration");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt select query execution
    $sql = "SELECT * FROM users WHERE  `username` = '".$_SESSION['username']."' ";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<center><table>";
                echo "<tr>";

                    echo "<th>username</th>";
                    echo "<th>email</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
            echo "</center></table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);
    ?>

</html>
