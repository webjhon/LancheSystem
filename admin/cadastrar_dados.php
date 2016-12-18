<?php
require_once ('./conecta.php');
//Lendo dados via Método POST
if(isset($_POST['cad_nome']))$nome = $_POST['cad_nome'];
if(isset($_POST['cad_cargo']))$cargo = $_POST['cad_cargo'];
if(isset($_POST['cad_senha']))$senha = $_POST['cad_senha'];


    $fileName1 = pathinfo(basename($_FILES['foto_estagiario']['name']),PATHINFO_FILENAME);
    $fileType1 = pathinfo(basename($_FILES['foto_estagiario']['name']),PATHINFO_EXTENSION);
    
    $foto = $_POST['foto_estagiario'] = $fileName1.'.'.$fileType1;
    
    $_FILES['foto_estagiario']['novoNome'] = $foto;
    
    $target_dir = "../img/fotos/";
    
    $novaPasta = $target_dir.'estagiario_'.$login;
    
    foreach ($_FILES as $key => $value) {
	$target_file = basename($_FILES[$key]["name"]);
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$fileName = pathinfo($target_file,PATHINFO_FILENAME);
	$target_file = rtrim($target_file,'.'.$fileType);
	#tamanho do arquivo
	if (!file_exists($novaPasta)){
	 mkdir($novaPasta);
	 chmod($novaPasta, 0777);
	}
	$newFile = $_FILES[$key]['novoNome'];
	// echo $newFile.'<br>';
	if(!move_uploaded_file($_FILES[$key]["tmp_name"], $novaPasta.'/'.$newFile)){
              //return 0;
			}
		}


//Enviando Dados para mysql
if(isset($_POST['cad_envia'])){
  $cadastrar = "INSERT INTO funcionarios (id, nome, cargo, login, senha,foto)  VALUES ('','$nome','$cargo','$login','$senha','')";
  $envia_banco = mysql_query($cadastrar,$conecta) or print(mysql_error());
  echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso!');
parent.location = 'cadastro.php';
  </script>";
}
