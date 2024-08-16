<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	
	$origem = ($_GET['origem']);
	$capitulo = ($_GET['cap']);
	
	$sql = ("SELECT * FROM `capitulos` WHERE obra_origem = '".$origem."' AND capitulo = '".$capitulo."'");
	$banana = mysqli_query($con,$sql) or die(("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
	$numRegistros =  $banana->num_rows;
	
	if($numRegistros != 0){
		echo ("verdadeiro");
	}
	
	
?>