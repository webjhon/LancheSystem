<!DOCTYPE html>

<html>
<head>
<!-- Arquivos fonte com minhas alterações -->
<link rel="stylesheet" href="css/my/geral.css" media="screen" charset="utf-8">
<script src="js/my/geral.js" charset="utf-8"></script>
<!-- Arquivos fonte requisitos do bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" charset="utf-8">
<script src="js/jquery-2.1.4.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
<!-- Abaixo a página segue seu fluxo normal. -->

  <meta charset="utf-8">
  <title>Pensar em um Nome.</title>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="img-responsive login-title text-center">
        <img src="img/burguer.jpg" alt="Logo do Site" id="logo">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="validarLogin.php" method="POST">
          <h2 class="text-center login-title"> Acesso Restrito</h2>
          <label for="login" class="sr-only"></label>
          <input type="text" name="login" class="form-control" autofocus="" required="" placeholder="Digite o Login"><br>
          <label for="senha" class="sr-only"></label>
          <input type="password" name="senha" class="form-control" autofocus="" required="" placeholder="Digite a senha"><br>
          <button id="login_envia" name="login_envia" class="btn btn-lg btn-primary btn-block">ENTRAR</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
