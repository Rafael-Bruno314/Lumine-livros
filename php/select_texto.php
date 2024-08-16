<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	
	
	$mudar = $_GET["manda"];
	
	$sql = mysqli_query($con,"SELECT * FROM textos WHERE id = ".$mudar);
	$numRegistros =  $sql->num_rows;
	
		if ($numRegistros != 0) {
			while ($informacoes = $sql -> fetch_object()) {
				echo $informacoes->titulo."@";
				echo $informacoes->autor."@";
				echo $informacoes->link."@";
				echo $informacoes->pasta."@";
				echo $informacoes->ano_publicacao."@";
				echo $informacoes->mes_lido."@";
				echo $informacoes->ano_lido."@";
				echo $informacoes->formato."@";
				echo $informacoes->notas."@";
				echo $informacoes->citacao."@";
			}
		}
?>