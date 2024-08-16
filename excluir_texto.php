<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir Textos ou Vídeos da Internet</title>
	<link rel="icon" href="icon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/excluir_texto.js"></script>
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
	$query_formato = mysqli_query($con,"SELECT * FROM formatos");
	$query_mudar = mysqli_query($con,"SELECT * FROM textos");

?>
  
  <div class="container">
  <div class="panel panel-primary">
	<div class="panel-body">
	<form id="theForm" method="post" name="theForm" action="javascript:void%200" enctype="multipart/form-data">
		
		<div class="col-xs-12 selectContainer">
		<select id="titulo_mudar" name="titulo_mudar" class="form-control" onChange="loadDoc(myFunction)">
			<option value="">Escolha o título da obra que deseja alterar</option>
			<?php while($titulo_muda = mysqli_fetch_array($query_mudar)) { ?>
			<option value="<?php echo ($titulo_muda['id']) ?>"><?php echo ($titulo_muda['id']); echo " - ";echo ($titulo_muda['titulo'])?></option>
			<?php } ?>
		</select>
		</div><br><br><br>
		
		<div class="form-group">
			<label for="usr">Título:</label>
			<input type="text" class="form-control" id="titulo" name="titulo" readonly placeholder="Título" value="" onblur="Valida_texto(this.value)">
		</div>
		
		<div class="form-group">
			<label for="usr">Link:</label>
			<input type="text" id="link_resumo_texto" name="link_resumo_texto" readonly class="form-control" placeholder="adicione a URL (link)" value="" style="display: block">
		</div><br>
		
		<div class="form-group">
			<label for="usr">Autor(es):</label>
			<input type="text" class="form-control" id="autor" name="autor" readonly placeholder="Autor" readonly value="">
		</div><br>
		
		<div class="col-xs-2 selectContainer">
		<select id="formato" name="formato" class="form-control" onChange="Add_formato()" readonly="readonly" tabindex="-1" aria-disabled="true" >
			<option value="formato">Formato</option>
		</select>
		</div>
		
		<div class="col-xs-2 selectContainer">
			<select id="pasta" name="pasta" class="form-control" onChange="Add_pasta()" readonly="readonly" tabindex="-1" aria-disabled="true" >
				<option>Pasta:</option>
			</select>
		</div>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
		<b>Lido em:&nbsp&nbsp </b>
			<select id="mes_lido_texto" name="mes_lido_texto" readonly="readonly" tabindex="-1" aria-disabled="true" >
				<option value="mes">Mês</option>
				
			</select> /
			<select id="ano_lido_texto" name="ano_lido_texto" readonly="readonly" tabindex="-1" aria-disabled="true" >
				<option value="ano_lido">Ano</option>
				<?php for($data_ano = date("Y");$data_ano>=1999;$data_ano--) { ?>
				<option value="<?php echo $ano_array2[$data_ano]; ?>"><?php echo $ano_array2[$data_ano]; ?></option>
				<?php } ?>
				<option value="1970">1970</option>
			</select> - 
			
			<select id="ano_pub" name="ano_pub" readonly="readonly" tabindex="-1" aria-disabled="true" >
				<option value = "ano_pub">Ano de Publicação</option>
				<?php for($data_ano = date("Y");$data_ano>=1980;$data_ano--) { ?>
				<option value="<?php echo $ano_array2[$data_ano]; ?>"><?php echo $ano_array2[$data_ano]; ?></option>
				<?php } ?>
				<option value="1970">1970</option>
			</select>
			<br><br><br>
			
			<div class="form-group">
			  <label for="comment">Notas:</label>
			  <textarea class="form-control" name="notas" id="notas" readonly rows="5" placeholder="Notas..."></textarea>
			</div>
			
			<b>Citações:&nbsp&nbsp </b><br>
			<textarea name="citacao" class="cinza" id="citacao" rows="4" cols="80" readonly placeholder="Citação..."></textarea>	
		<hr>
		<button type="submit" onclick="Confirma();" name="excluir" id="excluir" class="btn btn-primary" value="excluir">Excluir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset"  class="btn btn-warning" name="apagar" id="apagar" value="Apagar Campos">
		</form>
		</div>
		</div>
		<div id="saida"></div>
	
  </body>
</html>