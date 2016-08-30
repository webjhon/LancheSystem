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
        <h2> CADASTRAR PEDIDOS </h2>
        <br>
        <!-- CLASSE PRINCIPAL - CRIAR COMANDA -->
        <div id="criar_nova_comandas">
          <form class="form-horizontal" action="gerar_pedido.php" method="POST">
          <fieldset>

          <!-- Form Name -->
          <legend><!--ESTE CAMPO FICA ABAIXO DO CADASTRAR PEDIDOS, NO CASO DE NECESSIDADE DE USO--></legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="cliente">Cliente</label>
            <div class="col-md-5">
            <input id="cliente" name="cliente" placeholder="Digite o Telefone" class="form-control input-md" required="" type="text">

            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="funcionario">Funcionário</label>
            <div class="col-md-5">
              <select id="funcionario" name="funcionario" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Produto">Produto</label>
            <div class="col-md-5">
            <input id="Produto" name="Produto" placeholder="Pesquisar Produtos" class="form-control input-md" required="" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="quantidade">Quantidade</label>
            <div class="col-md-5">
            <input id="quantidade" name="quantidade" placeholder="Quantidade" class="form-control input-md" required="" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="valor">Valor</label>
            <div class="col-md-5">
            <input id="valor" name="valor" placeholder="Preço R$" class="form-control input-md" required="" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="data">Data</label>
            <div class="col-md-5">
            <input id="data" name="data" placeholder="00/00/2000" class="form-control input-md" required="" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="hora">Hora</label>
            <div class="col-md-5">
            <input id="hora" name="hora" placeholder="Hora" class="form-control input-md" required="" type="text">

            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="mesa">Mesa</label>
            <div class="col-md-5">
            <input id="mesa" name="mesa" placeholder="Mesa/ Telemarketing" class="form-control input-md" required="" type="text">

            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="enviar_comanda">Finalizar</label>
            <div class="col-md-4">
              <button id="enviar_comanda" name="enviar_comanda" class="btn btn-primary">Cadastrar Pedido</button>
            </div>
          </div>

          </fieldset>
          </form>

            </fieldset>
          </form>
        </div>

    </div>
  </div>
</body>
</html>
