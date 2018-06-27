<?php

session_start();

session_destroy();

// enviar o utilizador para página inicial
header('Location: inicio.php');
?>
