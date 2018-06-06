<?php
session_start();


$username = "";
$email    = "";
$errors = array();


$db = mysqli_connect('localhost', 'root', '', 'registration');


if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  if (empty($username)) { array_push($errors, "Username tem de estar preenchido"); }
  if (empty($email)) { array_push($errors, "Email tem de estar preenchido"); }
  if (empty($password_1)) { array_push($errors, "Password tem de estar prenchida"); }
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

    $query = "INSERT INTO users (username, email, password)
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Esta conectado";
    header('location: form.php');
  }
}

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
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Esta conectado";
      header('location: inicio2.php');
    }else {
      array_push($errors, "Username/Password incorreto");
    }
  }
}
  if(isset($_POST['sub'])){
    $prim = mysqli_real_escape_string($db, $_POST['prim']);
    $ult = mysqli_real_escape_string($db, $_POST['ult']);
    $morada = mysqli_real_escape_string($db, $_POST['morada']);
    $local = mysqli_real_escape_string($db, $_POST['local']);
    $zip = mysqli_real_escape_string($db, $_POST['zip']);





  }

?>
