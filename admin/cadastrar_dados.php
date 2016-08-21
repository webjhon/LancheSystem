<?php
require_once ('./conecta.php');
//Lendo dados via Método POST
if(isset($_POST['cad_nome']))$nome = $_POST['cad_nome'];
if(isset($_POST['cad_cargo']))$cargo = $_POST['cad_cargo'];
if(isset($_POST['cad_login']))$login = $_POST['cad_login'];
if(isset($_POST['cad_senha']))$senha = $_POST['cad_senha'];

//Enviando Dados para mysql
if(isset($_POST['cad_envia'])){
  $cadastrar = "INSERT INTO funcionarios (id, nome, cargo, login, senha,foto)  VALUES ('','$nome','$cargo','$login','$senha','')";
  $envia_banco = mysql_query($cadastrar,$conecta) or print(mysql_error());
  echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso!');
parent.location = 'cadastro.php';
  </script>";
}
