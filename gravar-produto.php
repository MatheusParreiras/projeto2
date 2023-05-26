<?php
include "conectar.php";


$name = $_POST["name"];
$price = $_POST["price"];
$image = $_POST["image"];


$sql = "INSERT INTO products (name, price, image) VALUES ('$name', $price, '$image')";
if (mysqli_query($conn, $sql)) {
  echo "Produto adicionado com sucesso";
} else {
  echo "Erro ao adicionar produto: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
