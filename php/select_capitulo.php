<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	
	$num_cap = ($_GET['num_cap']);
	$origem = ($_GET['origem']);
	
	$sql = ("SELECT * FROM `capitulos` WHERE obra_origem = '".$origem."' AND capitulo = '".$num_cap."'");
	$banana = mysqli_query($con,$sql) or die(("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
	$numRegistros =  $banana->num_rows;
	
	if ($numRegistros != 0) {
			while ($informacoes = $banana -> fetch_object()) {
				echo $informacoes->capitulo."@";
				echo $informacoes->titulo."@";
				echo $informacoes->mes_lido."@";
				echo $informacoes->ano_lido."@";
				echo $informacoes->notas."@";
				echo $informacoes->citacao."@";
				echo $informacoes->resumo."@";
				echo $informacoes->link."@";
			}
	}
?>