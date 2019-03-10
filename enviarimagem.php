<?php
	include_once 'conexao.php';

	$extensao = strtolower(substr($_FILES['imagem']['name'],-4));//pega a extensão do arquivo(o strtolower é para deixar a extensão em minusculo)

		$novo_nome = md5(time()).$extensao;//defini o novo nome do arquivo e vita do arquivo ter o mesmo nome
		$diretorio = "imagens/";//a pasta onde vai ficar as imagens

		move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);//acessa a pasta temporaria do PHP e pega o arquivo que foi enviado

		$sql_code = "INSERT INTO recebidos (img) VALUES ('$diretorio$novo_nome')";

		IF ($conn->query($sql_code)==true){
			header('Location: mostrar.php');
		} else {
			echo "Error: ".$sql_code."<br>".$conn->error;
		}
?>