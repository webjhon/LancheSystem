<?php require_once('./validar_sessao.php'); ?><!DOCTYPE html>
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
                <?php
        if ($_SESSION['cargo'] == "Caixa") {
          require_once './sidebar_menu_3.php';
        }
        if ($_SESSION['cargo'] == "Garçom") {
          require_once './sidebar_menu_2.php';
        }
        if ($_SESSION['cargo'] == "Gerente") {
          require_once './sidebar_menu.php';
        }
        ?>
        <!-- TERMINA O SIDEBAR MENU -->
      </div>
      <!-- COMEÇA O DASHBOARD -->
      <div class="col-md-offset-0 col-md-8 col-md-offset-2" id="conteudo_admin">
        <!--INSIRA A PAGINA DESEJADA -->
        <form class="form-horizontal" method="POST" action="gerar_nota_mesa.php">
<fieldset>

<!-- Form Name -->
<legend>Gerar Nota</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="selecionar_mesa">Mesa</label>  
  <div class="col-md-5">
  <input id="selecionar_mesa" name="selecionar_mesa" type="text" placeholder="N° Mesa" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buscar_mesa"></label>
  <div class="col-md-4">
      <button type="submit" id="buscar_mesa" name="buscar_mesa" class="btn btn-primary">Buscar</button>
  </div>
</div>

</fieldset>
</form>


                        </div>
                      </div>
                    </div>
                  </body>
                  </html>

