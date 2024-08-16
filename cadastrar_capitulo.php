<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Capítulos</title>
	<link rel="icon" href="icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/cadastrar_capitulo.js"></script>
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

	$query_origem = mysqli_query($con,"SELECT DISTINCT titulo FROM livros");
?>
  
  <div class="container">
  <div class="panel panel-primary">
	<div class="panel-body">
	<form id="theForm" method="post" name="theForm" action="javascript:void%200" enctype="multipart/form-data">
		
		<div class="col-xs-10 selectContainer">
		<select id="origem" name="origem" class="form-control" onChange="Mostra_num_cap(this.value)">
			<option value="origem">Obra de origem</option>
			<?php while($orig = mysqli_fetch_row($query_origem)) { ?>
			<option value="<?php echo ($orig[0]) ?>"><?php echo ($orig[0])?></option>
			<?php } ?>
		</select>
		</div>
		
		<div class="col-xs-2 selectContainer">
		<input type="text" class="form-control" onblur="loadDoc(Olha_cap,this.value)" id="num_cap" name="num_cap" placeholder="Cap." maxlength="3" size="3" value="" style="display: none" onblur="Valida_cap(this.value)">
		</div>
		<br>
		<br>
		<br>
		
		<div class="form-group">
			<label for="usr">Título:</label>
			<input type="text" id="titulo_capitulo" class="form-control" name="titulo_capitulo" placeholder="Título do capítulo" value="">
		</div>
		
		<b>Lido em:&nbsp&nbsp </b>
			<select id="mes_lido_capitulo" name="mes_lido_capitulo">
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
			<select id="ano_lido_capitulo" name="ano_lido_capitulo">
				<option value="ano_lido">Ano</option>
				<?php for($data_ano = date("Y");$data_ano>=1999;$data_ano--) { ?>
				<option value="<?php echo $ano_array2[$data_ano]; ?>"><?php echo $ano_array2[$data_ano]; ?></option>
				<?php } ?>
			</select><br><br>
			
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
			
		<button type="submit" onclick="Ajeita_citacao();Confirma();" name="cadastrar" id="cadastrar" class="btn btn-primary" value="Cadastrar">Cadastrar</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset"  class="btn btn-warning" name="apagar" id="apagar" value="Apagar Campos">
		</form>
	</div>
	</div>
		<div id="saida"></div>
	
  </body>
</html>