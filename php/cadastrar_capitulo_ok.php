<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);


	$titulo_capitulo =  ($_POST['titulo_capitulo']);
	if(empty($titulo_capitulo))$titulo_capitulo =  ("Por algum motivo mágico não foi definido");
	
	$num_cap =  ($_POST['num_cap']);
	if(empty($num_cap))$num_cap =  ("000");
	
	$origem =  ($_POST['origem']);
	if($origem == "origem")$origem =  ("Não definido");

	$mes_lido_capitulo =  ($_POST['mes_lido_capitulo']);
	if($mes_lido_capitulo == "mes")$mes_lido_capitulo =  ("Não definido");
	
	$ano_lido_capitulo =  ($_POST['ano_lido_capitulo']);
	if($ano_lido_capitulo == "ano_lido")$ano_lido_capitulo = 1970;
	
	$notas =  ($_POST['notas']);
	if(empty($notas))$notas =  ("Não definido");

	$link =  ($_POST['link_resumo_texto']);
	if(empty($link))$link = "#";
	
	$resumo =  ($_POST['resumo']);
	if(empty($resumo)){
		$resumo =  ("Não definido");
	}

	$citacoes =  ($_POST['mostrar_citacao_marcada']);
	if(empty($citacoes))$citacoes =  ("Não definido");

	
	$sql = "INSERT INTO capitulos(capitulo,titulo,obra_origem,mes_lido,ano_lido,notas,citacao,resumo,link) VALUES ('$num_cap','$titulo_capitulo','$origem','$mes_lido_capitulo','$ano_lido_capitulo','$notas','$citacoes','$resumo','$link')";
	mysqli_query($con,$sql) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
?>