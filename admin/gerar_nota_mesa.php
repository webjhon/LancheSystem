<?php require_once('./validar_sessao.php'); ?><!DOCTYPE html>
<html>
<head class="hidden-print">
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
      <div class="col-md-offset-2 col-md-10 col-md-offset-0 hidden-print" id="header_admin">
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
        <form class="form-horizontal hidden-print" method="POST" action="gerar_nota_mesa.php">
          <fieldset>

            <!-- Form Name -->
            <?php
            if(isset($_POST['selecionar_mesa'])) $mesa_escolhida = $_POST['selecionar_mesa'];
            ?>
            <legend>Gerar Nota</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="selecionar_mesa">Mesa</label>
              <div class="col-md-5">
                <input id="selecionar_mesa" name="selecionar_mesa" type="text" placeholder="N° Mesa" class="form-control input-md" required="" value="<?php echo $mesa_escolhida ?>">

              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="buscar_mesa"></label>
              <div class="col-md-4">
                <button id="buscar_mesa" name="buscar_mesa" class="btn btn-primary">Buscar</button>
              </div>
            </div>

          </fieldset>
        </form>
        <?php
        require_once './conecta.php';
        $query_somar = "SELECT SUM(lancheria.pedidos.valor) FROM lancheria.pedidos WHERE n_mesa = '$mesa_escolhida'";
        $resultado_soma = mysql_query($query_somar);
        while($row = mysql_fetch_array($resultado_soma)){
          $fecha_caixa = $row['SUM(lancheria.pedidos.valor)'];
        }
        ?>

        <div id="seleciona_mesa">
          <h2 class="text-center hidden-print">Pedidos Mesa N° <?php echo $mesa_escolhida ?></h2>
          <img src="../img/banner.png" class="visible-print-block">
          <h2 class="text-center visible-print-block">Pedidos Mesa N° <?php echo $mesa_escolhida ?> - Comanda de Pagamento </h2>

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
              $query = "SELECT * FROM lancheria.pedidos WHERE n_mesa = '$mesa_escolhida'";
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
                            echo ' <td> ';
                              echo $row['valor'];
                            }
                            ?>
                          </tbody>
                        </table>
                        <!--FIM DA PAGINA -->
                        <br>
                        <h3 class="alert alert-success hidden-print"> Preço Total: R$ <?php echo $fecha_caixa ?> </h3>
                        <h3 class="visible-print-block text-left"> Preço Total: R$ <?php echo $fecha_caixa ?> </h3>
                        <br>
                        <h3 class="glyphicon glyphicon-print hidden-print"> <a href="javascript:self.print()">IMPRIMIR COMANDA</a></h3><br>
                        <h3 class="glyphicon glyphicon-print hidden-print"> <a href="limpa_mesa.php?mesa=<?php echo $mesa_escolhida ?>">LIMPAR MESA</a></h3>    
                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </body>
              </html>
