<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	
	$origem = ($_GET['origem']);
	
	$query_cap = mysqli_query($con,"SELECT * FROM capitulos WHERE obra_origem = '".$origem."' ORDER BY capitulo");
	
	$numRegistros =  $query_cap->num_rows;
	
	if ($numRegistros != 0) {
			while ($informacoes = $query_cap -> fetch_object()) {
				echo $informacoes->capitulo."@";
			}
	}
?>