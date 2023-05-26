<?php

$host = "localhost";
$user = "matheus@localhost";
$password = "3378";
$database = "projeto2";


$conn = mysqli_connect($host, $user, $password, $database);


if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
