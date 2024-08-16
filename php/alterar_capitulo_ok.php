<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);

	
	$obra_origem =  ($_POST['origem']);

	$titulo_capitulo =  ($_POST['titulo_capitulo']);
	if(empty($titulo_capitulo))$titulo_capitulo =  ("Por algum motivo mágico não foi definido");
	
	$num_cap =  ($_POST['num_cap']);
	if(empty($num_cap))$num_cap =  ("000");

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
	
	$selecionar = "SELECT * FROM capitulos WHERE obra_origem ='".$obra_origem."' AND capitulo = '".$num_cap."'";
	$sql = mysqli_query($con,$selecionar);
	while ($informacoes = $sql -> fetch_object()) {
		$id = $informacoes->id;
	}
	
	
	$alterar = "UPDATE `capitulos` SET `titulo`= '$titulo_capitulo',`capitulo`= '$num_cap',`mes_lido`='$mes_lido_capitulo',`ano_lido`='$ano_lido_capitulo' ,`notas`='$notas',`link`='$link',`resumo`='$resumo',`citacao`='$citacoes' WHERE id = '$id'";
	mysqli_query($con,$alterar) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
?>