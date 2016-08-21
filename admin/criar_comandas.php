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

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="numero_mesa">Mesa</label>
                <div class="col-md-2">
                  <input id="numero_mesa" name="numero_mesa" type="text" placeholder="N°" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="nome_cliente">Cliente</label>
                <div class="col-md-6">
                  <input id="nome_cliente" name="nome_cliente" type="text" placeholder="Nome" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="quantidade">Quantidade</label>
                <div class="col-md-6">
                  <input id="quantidade" name="quantidade" type="text" placeholder="Unidades" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="desc_produto">Descrição</label>
                <div class="col-md-6">
                  <input id="desc_produto" name="desc_produto" type="text" placeholder="Produto" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="valor_produto">Valor</label>
                <div class="col-md-6">
                    <input id="valor_produto" name="valor_produto" type="text" placeholder="R$ " class="form-control input-md" required=""><br>

                </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="enviar_comanda"> Concluir</label>
                <div class="col-md-4">
                  <button id="enviar_comanda" name="enviar_comanda" class="btn btn-primary">LANÇAR</button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
                
    </div>
  </div>
</body>
</html>
