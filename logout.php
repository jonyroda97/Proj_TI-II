<?php

session_start();

session_destroy();

// enviar o utilizador para página de autenticação
header('Location: login.php');
?>
