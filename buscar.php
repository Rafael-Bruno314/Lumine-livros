<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<link rel="icon" href="icon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buscar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/buscar.js"></script>
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
	$query_editora = mysqli_query($con,"SELECT DISTINCT editora FROM livros");
	$query_tip = mysqli_query($con,"SELECT * FROM tipos");
	$query_format = mysqli_query($con,"SELECT * FROM formatos");
	$query_obra_origem = mysqli_query($con,"SELECT * FROM livros");
?>
   <div class="container"> 
	<form action="javascript:void%200" onSubmit="enviaDados('php/buscar_resultado.php')">
	<div class="panel panel-primary">
	<div class="panel-body">
	
	<div class="form-group">
		<label for="usr">Título:</label>
		<input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título">
	</div>
	
	<div class="form-group">
		<label for="usr">Autor(es):</label>
		<input type="text" id="autor" name="autor" class="form-control" placeholder="Autor(es)">
	</div><br>
	
	<div class="col-xs-4 selectContainer">
		<select id="tipo" name="tipo" class="form-control" onChange="myFunction()">
			<option value = "">Tipo de documento:</option>
			<option value = "livro">Livro</option>
			<option value = "artigo">Artigo</option>
			<option value = "texto">Outros</option>
		</select>
	</div>
		
	<div class="col-xs-4 selectContainer">
		<select id="pasta" name="pasta" class="form-control">
			<option value = "">Pasta:</option>
			<?php while($past = mysqli_fetch_array($query_pasta)) { ?>
		<option value="<?php echo ($past['pasta']) ?>"><?php echo ($past['pasta'])?></option>
		<?php } ?>
		</select>
	</div>
	
	<div class="col-xs-4 selectContainer">
		<select id="ano_pub" name="ano_pub" class="form-control">
			<option value = "">Ano de Publicação</option>
			<?php for($data_ano = date("Y");$data_ano>=1980;$data_ano--) { ?>
			<option value="<?php echo $ano_array2[$data_ano]; ?>"><?php echo $ano_array2[$data_ano]; ?></option>
			<?php } ?>
		</select>
	</div><br><br><br>
		
		<b>Lido em:&nbsp&nbsp </b><br>
		
		<div class="col-xs-3 selectContainer">
			<select id="mes_lido" name="mes_lido" class="form-control">
				<option value="">Mês</option>
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
			</select>
		</div>
		
		<div class="col-xs-2 selectContainer">
			<select id="ano_lido" name="ano_lido" class="form-control">
				<option value="">Ano</option>
				<?php for($data_ano = date("Y");$data_ano>=1999;$data_ano--) { ?>
				<option value="<?php echo $ano_array2[$data_ano]; ?>"><?php echo $ano_array2[$data_ano]; ?></option>
				<?php } ?>
			</select>
		</div><br><br><hr>
		
		<div id="mostrar_livro" style="display:none;">
			<div class="col-xs-4 selectContainer">
				<select id="genero" name="genero" class="form-control">
					<option value="">Gênero</option>
					<?php while($gener = mysqli_fetch_array($query_genero)) { ?>
					<option value="<?php echo ($gener['genero']) ?>"><?php echo ($gener['genero'])?></option>
					<?php } ?>
				</select>
			</div>
			
			<div class="col-xs-4 selectContainer">
				<select id="editora" name="editora" class="form-control">
					<option value="">Editora</option>
					<?php while($edit = mysqli_fetch_array($query_editora)) { ?>
					<option value="<?php echo ($edit['editora']) ?>"><?php echo ($edit['editora'])?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		
		
		<div id="mostrar_arquivo" style="display:none;">
			<div class="col-xs-4 selectContainer">
			<div class="form-group">
				<label for="usr">Palavras-chave:</label>
				<input type="text" id="palavras_chave" name="palavras_chave" class="form-control" placeholder="Palavras chave">
			</div>
			</div><br>
			
			<div class="col-xs-1 selectContainer"></div>
			
			<div class="col-xs-4 selectContainer">
				<select id="categoria" name="categoria" class="form-control">
					<option value="">Categoria</option>
					<?php while($tip = mysqli_fetch_array($query_tip)) { ?>
					<option value="<?php echo ($tip['tipo']) ?>"><?php echo ($tip['tipo'])?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		
		
		<div id="mostrar_texto" style="display:none;">
			<div class="col-xs-6 selectContainer">
				<select id="formato" name="formato" class="form-control">
					<option value="">Formato</option>
					<?php while($format = mysqli_fetch_array($query_format)) { ?>
					<option value="<?php echo ($format['formato']) ?>"><?php echo ($format['formato'])?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<br><br><hr>
		<input type="submit" class="btn btn-primary" name="Pesquisar" id="Pesquisar" value="Pesquisar">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset"  class="btn btn-warning" name="apagar" id="apagar" value="Apagar Campos">
		
	</div>
	</div><hr>
		<div id="saida"></div>
	</form>
	                                                
</div>	
</body>
</html>