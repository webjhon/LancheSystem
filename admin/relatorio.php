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
          <h2 class="text-center">Pedidos de Hoje</h2>
          <hr width="70%">
          <table class="table table-striped">
            <thead>
              <tr>
                  <th width="6%" align="left">N°</th>
                  <th width="7%" align="left">Mesa</th>
                  <th width="7%" align="left">Cliente</th>
                  <th width="7%" align="center">QTD</th>
                  <th width="7%" align="center">Descrição</th>
                  <th width="7%" align="center">Valor</th>
              </tr>
            </thead>
            <tbody>
              <?php require_once('./conecta.php'); ?>
              <?php
              $query = 'SELECT * FROM pedidos order by n_mesa';
              $result = mysql_query($query);
              while ($row = mysql_fetch_array($result)) {
                echo ' <tr> ';
                echo ' <td> ';
                echo $row['n_pedido'];
                echo ' <td> ';
                echo $row['n_mesa'];
                echo ' <td> ';
                echo $row['nome_cliente'];
                echo ' <td> ';
                echo $row['quantidade'];
                echo ' <td> ';
                echo $row['descricao'];
                echo ' <td>';
                echo $row['valor'];
              }
              ?>
        <!--FIM DA PAGINA -->

      </div>
    </div>
  </div>
  </body>
  </html>
