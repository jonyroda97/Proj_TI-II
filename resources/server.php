<?php

session_start();

$username = "";
$email    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'registration');


//Registar novo User
if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username tem de estar preenchido"); }
  if (empty($email)) { array_push($errors, "Email tem de estar preenchido"); }
  if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)
  if (empty($password_1)) { array_push($errors, "Password tem de estar preenchida"); }
  if ($password_1 != $password_2) {
  array_push($errors, "As passwords tem de ser iguais");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username já existe");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email já existe");
    }
  }

  if (count($errors) == 0) {
    $password = md5($password_1);
    $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "Esta conectado";
    header('location: form.php');
  }
}

//Login
if (isset($_POST['login_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username é necessário");
  }
  if (empty($password)) {
    array_push($errors, "Password é necessária");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_array($results);
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $row['id'];
      $_SESSION['success'] = "Esta conectado";
      $data_query = "SELECT * FROM users INNER JOIN dados ON users.id = dados.id WHERE users.id='".$_SESSION['id']."'";
      $data_results = mysqli_query($db, $data_query);
      if (mysqli_num_rows($data_results) == 1){
        $data_row = mysqli_fetch_array($data_results);
        $_SESSION['email'] = $data_row['email'];
        $_SESSION['prim'] = $data_row['prim'];
        $_SESSION['ult'] = $data_row['ult'];
        $_SESSION['telm'] = $data_row['telm'];
        $_SESSION['morada'] = $data_row['morada'];
        $_SESSION['local'] = $data_row['local'];
        $_SESSION['zip'] = $data_row['zip'];
        header('location: inicio2.php');
      } else {
        array_push($errors, "Mais do que 1 resultado");
      }
    } else {
      array_push($errors, "Username/Password incorreto");
    }
    mysqli_free_result($results);
    mysqli_free_result($data_results);
  }
}

//Formulário
if(isset($_POST['sub'])){
  $username = $_SESSION['username'];

  $prim = mysqli_real_escape_string($db, $_POST['prim']);
  $ult = mysqli_real_escape_string($db, $_POST['ult']);
  $telm = mysqli_real_escape_string($db, $_POST['telm']);
  $morada = mysqli_real_escape_string($db, $_POST['morada']);
  $local = mysqli_real_escape_string($db, $_POST['local']);
  $zip = mysqli_real_escape_string($db, $_POST['zip']);

  if (empty($prim)) { array_push($errors, "Primeiro Nome tem de estar preenchido"); }
  if (empty($ult)) { array_push($errors, "Último Nome tem de estar preenchido"); }
  if (empty($telm)) { array_push($errors, "Número de Telemóvel tem de estar preenchida"); }
  if (empty($morada)) { array_push($errors, "Morada tem de estar preenchida"); }
  if (empty($local)) { array_push($errors, "Localidade tem de estar preenchida"); }
  if (empty($zip)) { array_push($errors, "Código Postal tem de estar preenchida"); }

  $query = "SELECT * FROM users WHERE username='$username'";
  $id_results = mysqli_query($db, $query);
  if (mysqli_num_rows($id_results) == 1) {
      $row = mysqli_fetch_array($id_results);
      $_SESSION['id'] = $row['id'];
  }else{
    array_push($errors, "Não foi possível encontrar o utilizador");
  }

  if (count($errors) == 0) {
    $id = $_SESSION['id'];
    $query = "INSERT INTO dados (prim, ult, telm, morada, local, zip, id)
    VALUES('$prim', '$ult', '$telm', '$morada', '$local', '$zip', '$id')";
    mysqli_query($db, $query);
    unset($id);
    $_SESSION['prim'] = $prim;
    $_SESSION['ult'] = $ult;
    $_SESSION['telm'] = $telm;
    $_SESSION['morada'] = $morada;
    $_SESSION['local'] = $local;
    $_SESSION['zip'] = $zip;
    header('location: inicio2.php');
  }
}

?>
