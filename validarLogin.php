<?php


require_once ('./admin/conecta.php');
$nome = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';






if (isset($_POST['login_envia'])) {
    $buscar = "SELECT * FROM funcionarios WHERE nome = '$nome' and senha = '$senha'";
    $verifica = mysql_query($buscar);
    if (mysql_num_rows($verifica) <= 0) {
    echo "<script>
        alert('Usuário ou senha incorreto.');
        //parent.location = 'index.php';
    </script>";
    } else {
        //Aqui devo fazer a sessão
        
        session_start();
        $registro = mysql_fetch_array($verifica);
        $_SESSION['id'] = $registro['id'];
        $_SESSION['nome'] = $registro['nome'];
        $_SESSION["cargo"] = $registro['cargo'];
        
        echo $registro['cargo'];
        
        header("Location: ./admin/admin_page.php");
    }
}


