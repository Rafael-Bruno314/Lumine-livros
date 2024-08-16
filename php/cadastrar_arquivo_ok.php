<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);

	
	$titulo =  ($_POST['titulo']);
	if(empty($titulo))$titulo =  ("Por algum motivo mágico não foi definido");
	
	$autores =  ($_POST['mostrar_autor_marcado']);
	if(empty($autores))$autores =  ("Não definido");
	
	$categoria =  ($_POST['categoria']);
	if($categoria == "categoria")
		$categoria =  ("Não definido");
	else{
		$sql_cat = mysqli_query($con,"SELECT * FROM tipos");
		$sql_insert_cat = "INSERT INTO tipos(tipo) VALUES ('$categoria')";
		while ($informacoes = $sql_cat -> fetch_object()) {
			if($informacoes->tipo == $categoria){
				$sql_insert_cat = "SELECT * FROM tipos";
			}
		}
		mysqli_query($con,$sql_insert_cat);
	}
	
	$palavra_chave =  ($_POST['mostrar_palavra_chave_marcado']);
	if(empty($palavra_chave))$palavra_chave =  ("Não definida");
	
	$mes_lido_arquivo =  ($_POST['mes_lido_arquivo']);
	if($mes_lido_arquivo == "mes")$mes_lido_arquivo =  ("Não definido");
	
	$ano_lido_arquivo =  ($_POST['ano_lido_arquivo']);
	if($ano_lido_arquivo == "ano_lido")$ano_lido_arquivo = 1970;
	
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
	if(empty($link))$link = "#";
	
	$resumo =  ($_POST['resumo']);
	if(empty($resumo)){
		$resumo =  ("Não definido");
	}
	
	$name = 'c:\\Users\\1234\\desktop\\info.txt';
	$file = fopen($name, 'a');
	
	$text = "<".$categoria.">"."\r\n"."<titulo>".$titulo."</titulo>"."\r\n"."<autor>".$autores."</autor>"."\r\n"."</".$categoria.">\r\n"."\r\n";
	
	fwrite($file, $text);
	fclose($file);
	
	

	$sql = "INSERT INTO artigos(titulo,categoria,autor,palavra_chave,ano_publicacao,mes_lido,ano_lido,notas,citacao,pasta,resumo,link) VALUES ('$titulo','$categoria','$autores','$palavra_chave','$ano_pub','$mes_lido_arquivo','$ano_lido_arquivo','$notas','$citacoes','$pasta','$resumo','$link')";
	mysqli_query($con,$sql) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
?>