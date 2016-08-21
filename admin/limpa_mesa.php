<?php

require_once ('./conecta.php');
$mesa = $_GET['mesa'];
$deletar = "DELETE FROM pedidos where n_mesa = '$mesa'";
$executar = mysql_query($deletar);
header('Location: gerar_nota.php');

    



