<?php
/*// esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:buscar.php');
}
$logado = $_SESSION['login'];
*/?> 

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Livro</title>
	<link rel="icon" href="icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/cadastrar_livro.js"></script>
    <script src="js/w3.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  
  <!-- Para colocar a navbar restrita -->
    <div w3-include-html="css/navbar_restrita.html"></div> 
    <!-- Para colocar a navbar restrita -->
    <script>w3.includeHTML();</script>
  
  <?php	
	
	include('class/conecta.php');
	include('php/ano_config.php');

	$query_pasta = mysqli_query($con,"SELECT * FROM pastas");
	$query_genero = mysqli_query($con,"SELECT * FROM generos");
?>
  
  <div class="container">
  <div class="panel panel-primary">
	<div class="panel-body">
	<form id="theForm" method="post" name="theForm" action="javascript:void%200" enctype="multipart/form-data">

		<div class="form-group">
			<label for="usr">Título:</label>
			<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="" onblur="Valida_texto(this.value)">
		</div>
		
		<div class="form-group">
			<label for="usr">Autor(es):</label>
		<input type="text" id="autor" name="autor" placeholder="Autor" value="">
		<input type="button" id="add_autor" onclick="Add_autor()" name="add_autor" value="+">
		<br>
		<div id="mostrar_autor"></div>
		<input type="text" id="mostrar_autor_marcado" name="mostrar_autor_marcado" style="display: none">
		<br>
		</div>
		
		<div class="col-xs-2 selectContainer">
		<select id="genero" name="genero" class="form-control" onChange="Add_genero()">
			<option value="genero">Gênero</option>
			<?php while($gener = mysqli_fetch_array($query_genero)) { ?>
			<option value="<?php echo ($gener['genero']) ?>"><?php echo ($gener['genero'])?></option>
			<?php } ?>
			<option value="outro">Outro</option>
		</select>
		<input type="text" id="trapaca_genero" name="trapaca_genero" style="display: none">
		</div>
		
		<div class="col-xs-2 selectContainer">
		<select id="status" class="form-control" name="status">
				<option value = "status">Status:</option>
				<option value = "Finalizado">Finalizado</option>
				<option value = "Em andamento">Em andamento</option>
				<option value = "Abandonado">Abandonado</option>
		</select>
		</div>
			
			<div class="col-xs-2 selectContainer">
			<select id="pasta" class="form-control" name="pasta" onChange="Add_pasta()">
				<option value = "pasta">Pasta:</option>
				<?php while($past = mysqli_fetch_array($query_pasta)) { ?>
				<option value="<?php echo ($past['pasta']) ?>"><?php echo ($past['pasta'])?></option>
				<?php } ?>
				<option value="outro">Outra</option>
			</select>
			<input type="text" id="trapaca_pasta" name="trapaca_pasta" style="display: none">
			</div>
			
		<div class="col-xs-3">
			<input type="text" class="form-control" id="editora" name="editora" placeholder="Editora" value="">
		</div>
		
		<br>
		<br><br>
		<b>Lido em:&nbsp&nbsp </b>
			<select id="mes_lido_livro" name="mes_lido_livro">
				<option value="mes">Mês</option>
				<option value="Janeiro">Janeiro</option>
				<option value="Fevereiro">Fevereiro</option>
				<option value="Março">Março</option>
				<option value="Abril">Abril</option>
				<option value="Maio">Maio</option>
				<option value="Junho">Junho</option>
				<option value="Julho">Julho</option>
				<option value="Agosto">Agosto</option>
				<option value="Setembro">Setembro</option>
				<option value="Outubro">Outubro</option>
				<option value="Novembro">Novembro</option>
				<option value="Dezembro">Dezembro</option>
			</select> /
			<select id="ano_lido_livro" name="ano_lido_livro">
				<option value="ano_lido">Ano</option>
				<?php for($data_ano = date("Y");$data_ano>=1999;$data_ano--) { ?>
				<option value="<?php echo $ano_array2[$data_ano]; ?>"><?php echo $ano_array2[$data_ano]; ?></option>
				<?php } ?>
			</select> - 
			
			<select id="ano_pub" name="ano_pub">
				<option value = "ano_pub">Ano de Publicação</option>
				<?php for($data_ano = date("Y");$data_ano>=1980;$data_ano--) { ?>
				<option value="<?php echo $ano_array2[$data_ano]; ?>"><?php echo $ano_array2[$data_ano]; ?></option>
				<?php } ?>
			</select>
			<br><br><br>
			
			<div class="form-group">
			  <label for="comment">Notas:</label>
			  <textarea class="form-control" name="notas" id="notas" rows="5" placeholder="Notas..."></textarea>
			</div>
			
			<b>Citações:&nbsp&nbsp </b><br>
			<textarea name="citacao" id="citacao" rows="4" cols="80" placeholder="Citação..."></textarea>
			<input type="button" id="add_citacao" onclick="Add_citacao()" name="add_citacao" value="+">	
			<input type="text" id="mostrar_citacao_marcada" name="mostrar_citacao_marcada" style="display: none">
			<div id="mostrar_citacao"></div>
			
			<div class="form-group">
			  <label id="resumo_label" for="comment">Resumo:</label>
			  <textarea class="form-control" name="resumo" id="resumo" rows="10" placeholder="Escreva ou copie e cole o resumo aqui... "></textarea>
			</div>

			<div class="col-xs-6 selectContainer">
			  <label id="resumo_label" for="comment">O resumo está online?</label>
			<input type="text" id="link_resumo_texto" name="link_resumo_texto" class="form-control" placeholder="adicione a URL (link)" value="" style="display: block">
			</div>
			<br><br><br>
			<hr>
			
		<button type="submit" class="btn btn-primary" onclick="Ajeita_citacao();Ajeita_autor();Confirma();" name="buscar" id="buscar" value="Cadastrar">Cadastrar</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset"  class="btn btn-warning" name="apagar" id="apagar" value="Apagar Campos">
		</form>
	</div>
	</div>	
	<div id="saida"></div>
	
  </body>
</html>