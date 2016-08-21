<?php

require_once ('./conecta.php');
$id = $_GET['id'];
//Lendo dados via Método POST
if(isset($_POST['cad_nome']))$nome = $_POST['cad_nome'];
if(isset($_POST['cad_cargo']))$cargo = $_POST['cad_cargo'];
if(isset($_POST['cad_login']))$login = $_POST['cad_login'];
if(isset($_POST['cad_senha']))$senha = $_POST['cad_senha'];

//Enviando Dados para mysql
if(isset($_POST['cad_envia'])){
  $editar = "UPDATE funcionarios SET nome = '$nome', cargo = '$cargo' , login = '$login' , senha = '$senha' WHERE funcionarios.id = '$id'";
  $envia_banco = mysql_query($editar,$conecta) or print(mysql_error());
  echo "<script type='text/javascript'>alert('Dados editados com sucesso!');
parent.location = 'cadastro.php';
  </script>";
}