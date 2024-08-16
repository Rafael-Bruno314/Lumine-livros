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
	
	$genero =  ($_POST['genero']);
	if($genero == "genero")
		$genero =  ("Não definido");
	else{
		$sql_gen = mysqli_query($con,"SELECT * FROM generos");
		$sql_insert_gen = "INSERT INTO generos(genero) VALUES ('$genero')";
		while ($informacoes = $sql_gen -> fetch_object()) {
			if($informacoes->genero == $genero){
				$sql_insert_gen = "SELECT * FROM generos";
			}
		}
		mysqli_query($con,$sql_insert_gen);
	}

	$editora =  ($_POST['editora']);
	if(empty($editora))$editora =  ("Não definido");
	
	$mes_lido_livro =  ($_POST['mes_lido_livro']);
	if($mes_lido_livro == "mes")$mes_lido_livro =  ("Não definido");
	
	$ano_lido_livro =  ($_POST['ano_lido_livro']);
	if($ano_lido_livro == "ano_lido")$ano_lido_livro = 1970;
	
	$ano_pub = $_POST['ano_pub'];
	if($ano_pub == "ano_pub")$ano_pub = 1970;
	
	$status =  ($_POST['status']);
	if($status == "status")$status =  ("Não definido");
	
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
	
	$link =  ($_POST['link_resumo_texto']);
	if(empty($link))$link = "#";
	
	$resumo =  ($_POST['resumo']);
	if(empty($resumo)){
		$resumo =  ("Não definido");
	}

	$citacoes =  ($_POST['mostrar_citacao_marcada']);
	if(empty($citacoes))$citacoes =  ("Não definido");

	$autores =  ($_POST['mostrar_autor_marcado']);
	if(empty($autores))$autores =  ("Não definido");
	
	
	$alterar = "UPDATE `livros` SET `titulo`= '$titulo',`autor`= '$autores',`genero`= '$genero',`editora`='$editora',`mes_lido`='$mes_lido_livro',`ano_lido`='$ano_lido_livro' ,`ano_publicacao`='$ano_pub',`status`='$status',`notas`='$notas',`pasta`='$pasta',`link`='$link',`resumo`='$resumo',`citacao`='$citacoes' WHERE id = '$id'";
	
	mysqli_query($con,$alterar) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
?>