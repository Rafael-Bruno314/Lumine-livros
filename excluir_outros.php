<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir Outros</title>
	<link rel="icon" href="icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/excluir_outros.js"></script>
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

	$query_formato = mysqli_query($con,"SELECT * FROM formatos");
	$query_genero = mysqli_query($con,"SELECT * FROM generos");
	$query_pasta = mysqli_query($con,"SELECT * FROM pastas");
	$query_tipo = mysqli_query($con,"SELECT * FROM tipos");
?>

	<div class="container">
		<div class="panel panel-primary">
		<div class="panel-body">
			
			<div class="col-xs-6 selectContainer">
			<label for="usr">Formatos:</label>
			<select id="formatos" name="formatos" class="form-control" onChange="Excluir_formato(this.value,this.id)">
				<option value="">Formatos</option>
				<?php while($format = mysqli_fetch_array($query_formato)) { ?>
				<option value="<?php echo ($format['id']) ?>"><?php echo ($format['formato'])?></option>
				<?php } ?>
			</select>
			</div>

			<div class="col-xs-6 selectContainer">
			<label for="usr">Gêneros:</label>
			<select id="generos" name="generos" class="form-control" onChange="Excluir_genero(this.value,this.id)">
				<option value="">Gêneros</option>
				<?php while($gener = mysqli_fetch_array($query_genero)) { ?>
				<option value="<?php echo ($gener['id']) ?>"><?php echo ($gener['genero'])?></option>
				<?php } ?>
			</select>
			</div><br><br><br><br><br><br>
			
			<div class="col-xs-6 selectContainer">
			<label for="usr">Pastas:</label>
			<select id="pastas" name="pastas" class="form-control" onChange="Excluir_pasta(this.value,this.id)">
				<option value="">Pastas</option>
				<?php while($past = mysqli_fetch_array($query_pasta)) { ?>
				<option value="<?php echo ($past['id']) ?>"><?php echo ($past['pasta'])?></option>
				<?php } ?>
			</select>
			</div>

			<div class="col-xs-6 selectContainer">
			<label for="usr">Categorias:</label>
			<select id="tipos" name="tipos" class="form-control" onChange="Excluir_categoria(this.value,this.id)">
				<option value="">Categorias</option>
				<?php while($tip = mysqli_fetch_array($query_tipo)) { ?>
				<option value="<?php echo ($tip['id']) ?>"><?php echo ($tip['tipo'])?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		</div>
		<input type="text" id="recebe" name="recebe" style="display: none">
		<p id="saida"></p>
	</div>