<?php
include 'conexao.php';
session_start();
//destroy the session
session_unset();
//redirect to login page
header("location: ./pages/login.html");
?>
