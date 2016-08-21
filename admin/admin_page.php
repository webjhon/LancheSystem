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
      <div class="col-md-offset-0 col-md-10 col-md-offset-0" id="header_admin">
          <h1 class="text-left" id="info_topo"> PAINEL ADMINISTRATIVO/<a href="desloga.php" ><?php echo $_SESSION['nome'];?></a>    </h1>
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
        <div>
          <h1 class="text-center"> SISTEMA DE ADMINISTRAÇÃO DE LANCHERIAS</h1>
          <br>
          <br>
          <h2> Informações Gerais </h2>
          <h3> Dia:
            <?php
            $data = date ("j/m/Y");
            echo $data;
            echo "<br>";
            echo "<br>";
            require_once './conecta.php';
            $soma_valor = 'SELECT SUM(pedidos.valor) from lancheria.pedidos';
            $resultado_valor = mysql_query($soma_valor);
            $soma_clientes = 'SELECT COUNT(DISTINCT lancheria.pedidos.nome_cliente) from lancheria.pedidos';
            $resultado_clientes = mysql_query($soma_clientes);
            $soma_mesas = 'SELECT COUNT(DISTINCT lancheria.pedidos.n_mesa) from lancheria.pedidos';
            $resultado_mesas = mysql_query($soma_mesas);
            while($row = mysql_fetch_array($resultado_valor)){
              $valor = $row['SUM(pedidos.valor)'];
            }
            while($row = mysql_fetch_array($resultado_clientes)){
              $clientes = $row['COUNT(DISTINCT lancheria.pedidos.nome_cliente)'];
            }
            while($row = mysql_fetch_array($resultado_mesas)){
              $mesas = $row['COUNT(DISTINCT lancheria.pedidos.n_mesa)'];
            }
            ?>
            <p class="alert alert-info">Dinheiro Pendente: R$ <?php echo $valor ?>,00  <a href="./admin_page.php"class="glyphicon glyphicon-refresh"></a></p>

            <h2> Informações do Restaurante </h2>
            <div class="alert alert-info">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Mesas Disponíveis: <?php echo 50 - $mesas ?> </strong>
            </div>
            <div class="alert alert-danger">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Mesas Ocupadas: <?php echo $mesas ?> </strong>
            </div>

            <h3><span class="glyphicon glyphicon-user"></span> Clientes Total:  <?php  echo $clientes ?></h3>
            



          </div>
          <!--FIM DA PAGINA -->

        </div>
      </div>
    </div>
  </body>
  </html>
