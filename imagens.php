<?php
	include_once 'conexao.php';

	$consultar=$conn->query ("SELECT*FROM recebidos");
	while ($dados=$consultar->fetch_assoc()){
		$foto = $dados['img'];
	
	echo "<img src='$foto' style='width:70%; border:3pt solid;'><br><br>";
	}
?>