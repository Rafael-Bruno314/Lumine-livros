<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	
	$titulo =  ($_POST['origem']);
	$cap =  ($_POST['num_cap']);
	
	$selecionar = "SELECT * FROM capitulos WHERE obra_origem ='".$titulo."' AND capitulo = '".$cap."'";
	$sql = mysqli_query($con,$selecionar);
	while ($informacoes = $sql -> fetch_object()) {
		$id = $informacoes->id;
	}
	
	$deletar = "DELETE FROM `capitulos` WHERE id = '$id'";
	
	mysqli_query($con,$deletar) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
	
?>