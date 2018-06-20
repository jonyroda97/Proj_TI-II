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

      /* Dropdown Button */
      .dropbtn {
          background-color: #008CBA;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
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
    <div class="dropdown" height=156px>
      <select class="dropbtn" id="ddl_example3" name="ddl_example3">

        <option value="1">Grécia</option>

        <option value="2">Hawaii</option>

        <option value="3">Londres</option>

        <option value="4">Marrocos</option>

        <option value="5">Maiorca</option>

        <option value="6">teVeneza</option>

      </select>
    </div>

    <script>

      function setSelectedIndex(s, i){
        s.options[i-1].selected = true;
        return;
      }

      setSelectedIndex(document.getElementById("ddl_example3"), $_GLOBALS['viagem']);
      unset($_GLOBALS['viagem']);

    </script>

  </body>
</html>
