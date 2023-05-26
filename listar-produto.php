<?php
include "conectar.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);


echo "<table>";
echo "<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Imagem</th><th>Ações</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row["id"] . "</td>";
  echo "<td>" . $row["name"] . "</td>";
  echo "<td>" . $row["price"] . "</td>";
  echo "<td><img src='uploads/" . $row["image"] . "'></td>";
  echo "<td><a href='editar-produto.php?id=" . $row["id"] . "'>Editar</a> | <a href='excluir-produto.php?id=" . $row["id"] . "'>Excluir</a></td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
