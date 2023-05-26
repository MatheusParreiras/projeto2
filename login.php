<!DOCTYPE html>
<html>
<head>
  <title>Página de Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center">Login</h2>
      <form action="validar-login.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Usuário" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Senha" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
