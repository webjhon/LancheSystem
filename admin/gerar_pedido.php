<?php

require_once ('./conecta.php');
//Lendo dados via Método POST
if(isset($_POST['numero_mesa']))$mesa = $_POST['numero_mesa'];
if(isset($_POST['nome_cliente']))$nome = $_POST['nome_cliente'];
if(isset($_POST['quantidade']))$qtd = $_POST['quantidade'];
if(isset($_POST['desc_produto']))$desc = $_POST['desc_produto'];
if(isset($_POST['valor_produto']))$valor = $_POST['valor_produto'];

//Enviando Dados para mysql
if(isset($_POST['enviar_comanda'])){
  $cadastrar = "INSERT INTO pedidos (n_pedido, n_mesa, nome_cliente, quantidade, descricao,valor)  VALUES ('','$mesa','$nome','$qtd','$desc','$valor')";
  $envia_banco = mysql_query($cadastrar,$conecta) or print(mysql_error());
  echo "<script type='text/javascript'>alert('Pedido Gerado com Sucesso!');
parent.location = 'criar_comandas.php';
  </script>";
}