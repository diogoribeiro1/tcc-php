<?php


$servername = "localhost";
$database = "acau-db";
$username = "root";
$password = "123";
//$database = "u727039026_ACAU_BD";
//$username = "u727039026_adm";
//$password = "q?8QX89R";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
 mysqli_set_charset($conn, 'utf8');
if (!$conn) {
    die("Falha na conexao: " . mysqli_connect_error());
}else{
echo "";
}

?>
