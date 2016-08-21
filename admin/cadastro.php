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
      <div class="col-md-offset-0 col-md-8 col-md-offset-2" id="conteudo_admin">
        <div>
          <form class="form-horizontal" method="post" action="./cadastrar_dados.php">
            <fieldset>

              <!-- Form Name -->
              <legend>Cadastrar Funcionários</legend>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="cad_nome">Nome</label>
                <div class="col-md-6">
                  <input id="cad_nome" name="cad_nome" type="text" placeholder="Nome" class="form-control input-md" required="" autofocus="">

                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="cad_cargo">Cargo</label>
                <div class="col-md-6">
                  <select id="cad_cargo" name="cad_cargo" class="form-control" required="" autofocus="">
                    <option disabled="" selected="">Selecione</option>
                    <option value="Garçom">Garçom</option>
                    <option value="Caixa">Caixa</option>
                    <option value="Gerente">Gerente</option>
                  </select>
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="cad_login">Nome de Usuário</label>
                <div class="col-md-6">
                  <input id="cad_login" name="cad_login" type="text" placeholder="login" class="form-control input-md" required="" autofocus="">

                </div>
              </div>

              <!-- Password input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="cad_senha">Senha</label>
                <div class="col-md-6">
                  <input id="cad_senha" name="cad_senha" type="password" placeholder="Senha" class="form-control input-md" required="" autofocus="">

                </div>
              </div>

              <!-- File Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="cad_foto">Foto</label>
                <div class="col-md-4">
                  <input id="cad_foto" name="cad_foto" class="input-file" type="file">
                </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="cad_envia">Concluir</label>
                <div class="col-md-4">
                  <button id="cad_envia" name="cad_envia" class="btn btn-primary">Cadastrar</button>
                </div>

              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
  </html>
