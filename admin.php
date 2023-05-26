<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="gravar-produto.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Nome do Produto:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="price">Preço:</label>
    <input type="number" class="form-control" id="price" name="price" required>
  </div>
  <div class="form-group">
    <label for="image">Imagem:</label>
    <input type="file" class="form-control-file" id="image" name="image" required>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar Produto</button>
</form>
<form action="gravar-produto.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
  <div class="form-group">
    <label for="name">Nome do Produto:</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $product_name; ?>" required>
  </div>
  <div class="form-group">
    <label for="price">Preço:</label>
    <input type="number" class="form-control" id="price" name="price" value="<?php echo $product_price; ?>" required>
  </div>
  <div class="form-group">
    <label for="image">Imagem:</label>
    <input type="file" class="form-control-file" id="image" name="image">
    <small class="form-text text-muted">Selecione um arquivo apenas se deseja alterar a imagem.</small>
  </div>
  <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>
<form action="gravar-produto.php" method="POST">
  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
  <p>Você tem certeza que deseja excluir o produto '<?php echo $product_name; ?>'?</p>
  <button type="submit" class="btn btn-danger">Excluir Produto</button>
</form>

</body>
</html>
