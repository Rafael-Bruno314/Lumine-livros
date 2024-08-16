<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	
	$id =  ($_POST['titulo_mudar']);
	
	$titulo =  ($_POST['titulo']);
	if(empty($titulo))$titulo =  ("Por algum motivo mágico não foi definido");
	
	$autores =  ($_POST['mostrar_autor_marcado']);
	if(empty($autores))$autores =  ("Não definido");
	
	$formato =  ($_POST['formato']);
	if($formato == "formato")
		$formato =  ("Não definido");
	else{
		$sql_form = mysqli_query($con,"SELECT * FROM formatos");
		$sql_insert_form = "INSERT INTO formatos(formato) VALUES ('$formato')";
		while ($informacoes = $sql_form -> fetch_object()) {
			if($informacoes->formato == $formato){
				$sql_insert_form = "SELECT * FROM formatos";
			}
		}
		mysqli_query($con,$sql_insert_form);
	}
	
	$mes_lido_texto =  ($_POST['mes_lido_texto']);
	if($mes_lido_texto == "mes")$mes_lido_texto =  ("Não definido");
	
	$ano_lido_texto =  ($_POST['ano_lido_texto']);
	if($ano_lido_texto == "ano_lido")$ano_lido_texto = 1970;
	
	$ano_pub = $_POST['ano_pub'];
	if($ano_pub == "ano_pub")$ano_pub = 1970;
	
	$notas =  ($_POST['notas']);
	if(empty($notas))$notas =  ("Não definido");

	$pasta =  ($_POST['pasta']);
	if($pasta == "pasta")
		$pasta =  ("Sem pasta");
	else{
		$sql_pas = mysqli_query($con,"SELECT * FROM pastas");
		$sql_insert_pas = "INSERT INTO pastas(pasta) VALUES ('$pasta')";
		while ($informacoes = $sql_pas -> fetch_object()) {
			if($informacoes->pasta == $pasta){
				$sql_insert_pas = "SELECT * FROM pastas";
			}
		}
		mysqli_query($con,$sql_insert_pas);
	}
	
	$citacoes =  ($_POST['mostrar_citacao_marcada']);
	if(empty($citacoes))$citacoes =  ("Não definido");
	
	$link =  ($_POST['link_resumo_texto']);
	if(empty($link))$link =  ("Não definido");

	$alterar = "UPDATE `textos` SET `titulo`= '$titulo',`autor`= '$autores',`formato`= '$formato',`pasta`='$pasta',`mes_lido`='$mes_lido_texto',`ano_lido`='$ano_lido_texto' ,`ano_publicacao`='$ano_pub',`notas`='$notas',`link`='$link',`citacao`='$citacoes' WHERE id = '$id'";
	
	mysqli_query($con,$alterar) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
?>