<?php

require_once ('./conecta.php');
//Lendo dados via Método POST
if(isset($_POST['cliente']))$cliente = $_POST['cliente'];
if(isset($_POST['funcionario']))$funcionario = $_POST['funcionario'];
if(isset($_POST['produto']))$produto = $_POST['produto'];
if(isset($_POST['quantidade']))$quantidade = $_POST['quantidade'];
if(isset($_POST['valor']))$valor = $_POST['valor'];
if(isset($_POST['data']))$data = $_POST['data'];
if(isset($_POST['hora']))$hora = $_POST['hora'];
if(isset($_POST['mesa']))$mesa = $_POST['mesa'];

//Enviando Dados para mysql
if(isset($_POST['enviar_comanda'])){
  $cadastrar = "INSERT INTO pedido_produto (id, id_cliente, id_funcionario, id_produto, quantidade, valor, data, hora, mesa)  VALUES ('','$cliente','$funcionario','$produto','$quantidade','$valor','$data','$hora','$mesa')";
  $envia_banco = mysql_query($cadastrar,$conecta) or print(mysql_error());
  echo "<script type='text/javascript'>alert('Pedido Gerado com Sucesso!');
parent.location = 'criar_comandas.php';
  </script>";
}
