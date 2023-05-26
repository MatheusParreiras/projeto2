<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<div class="container">
  <div class="row">
    <?php

    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="col-md-4">';
      echo '<div class="card">';
      echo '<img src="uploads/' . $row["image"] . '" class="card-img-top" alt="Imagem do Produto">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $row["name"] . '</h5>';
      echo '<p class="card-text">Preço: R$ ' . $row["price"] . '</p>';
      echo '<a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </div>
</div>
