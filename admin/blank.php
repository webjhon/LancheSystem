<!DOCTYPE html>
<html>
<head>
  <!-- Arquivos fonte com minhas alterações -->
  <link rel="stylesheet" href="../css/my/geral.css" media="screen" charset="utf-8">
  <script src="../js/jquery-2.1.4.min.js" charset="utf-8"></script>
  <script src="../js/my/geral.js" charset="utf-8"></script>
  <!-- Arquivos fonte requisitos do bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" charset="utf-8">
  <script src="../js/bootstrap.min.js" charset="utf-8"></script>
  <!-- Abaixo a página segue seu fluxo normal. -->
  <meta charset="utf-8">
  <title>Página de Administração</title>
</head>
<body>
  <div class="container-fluid">
    <!-- Primeira linha da pagina - Cabeçalho -->
    <div class="row">
      <div class="col-md-offset-2 col-md-10 col-md-offset-0" id="header_admin">
        <h1 class="text-left"> PAINEL ADMINISTRATIVO</h1>
      </div>
    </div>
    <!-- Segunda linha da pagina - sidebar menu -->
    <!-- COMEÇA  O SIDEBAR MENU -->
    <div class="row">
      <div class="col-md-2" id="wrapper">
        <?php require_once('./sidebar_menu.php'); ?>
        <!-- TERMINA O SIDEBAR MENU -->
      </div>
      <!-- COMEÇA O DASHBOARD -->
      <div class="col-md-offset-0 col-md-8 col-md-offset-2" id="conteudo_admin">
        <!--INSIRA A PAGINA DESEJADA -->

        <!--FIM DA PAGINA -->

      </div>
    </div>
  </div>
  </body>
  </html>
