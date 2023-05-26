<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];


  if ($username === "matheus@gmail.com" && $password === "3378") {
    $_SESSION["username"] = $username;
    header("Location: admin.php");
    exit;
  } else {
    echo "Credenciais inválidas";
  }
}
?>

