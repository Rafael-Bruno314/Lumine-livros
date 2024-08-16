<?php

include('../class/conecta.php');
$gmtDate = gmdate("D, d M Y H:i:s"); 
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Content-Type: text/html; charset=utf-8",true);

$tipo =  ($_POST['tipo']);

$titulo =  ($_POST['titulo']);
$autor =  ($_POST['autor']);
$pasta =  ($_POST['pasta']);
$ano_pub = $_POST['ano_pub'];

$genero =  ($_POST['genero']);
$editora =  ($_POST['editora']);
$mes_lido =  ($_POST['mes_lido']);
$ano_lido = $_POST['ano_lido'];

#$obra_origem = $_GET['obra_origem'];

if($tipo == "livro"){
	$sql = mysqli_query($con,"SELECT * FROM livros WHERE titulo LIKE '%".$titulo."%' AND autor LIKE '%".$autor."%' AND pasta LIKE '%".$pasta."%' AND ano_publicacao LIKE '%".$ano_pub."%' AND genero LIKE '%".$genero."%' AND editora LIKE '%".$editora."%' AND mes_lido LIKE '%".$mes_lido."%' AND ano_lido LIKE '%".$ano_lido."%'");
	$numRegistros =  $sql->num_rows;

	if ($numRegistros != 0) {
			while ($informacoes = $sql -> fetch_object()) {
				echo "<h3>".$informacoes->titulo."</h3>";
				echo "<li><b>Pasta:</b> ".$informacoes->pasta."</li>";
					$autor = $informacoes->autor;
					$autores = (explode(";",$autor));
					$cont = count($autores);
					echo "<li><b>Autor(es):</b> ";
					for($i=0;$i<$cont;$i++){
						if($autores[$i] != "")
						echo $autores[$i]."; ";
					}
					echo "</li>";
				echo  ("<li><b>Gênero:</b> ").$informacoes->genero."</li>";
				echo "<li><b>Editora:</b> ".$informacoes->editora."</li>";
				echo  ("<li><b>Ano de publicação:</b> ").$informacoes->ano_publicacao."</li>";
				echo "<li><b>Lido em:</b> ".$informacoes->mes_lido."/".$informacoes->ano_lido."</li>";

				if(!empty($informacoes->citacao)){
					echo "<details>";
					echo "<summary>". ("<b><u>Citações de interesse</u></b>")."</summary>";
						$citacao = $informacoes->citacao;
						$citacoes = (explode(";",$citacao));
						$cont = count($citacoes);
						echo "<ul>";
						for($i=0;$i<$cont;$i++){
							if($citacoes[$i] != "")
							echo "<li><q><i>".$citacoes[$i]."</i></q></li>";
						}
						echo "<br>";
						echo "</ul>";
					echo "</details>";
				}

				echo "<li><b>Status:</b> ".$informacoes->status."</li>";
					if(!empty($informacoes->resumo)){
					echo "<li><b>Resumo escrito da obra:</b> ".$informacoes->resumo."</li>";
					}else{
						if(!empty($informacoes->link))
						echo "<li><b>Link para um resumo/resenha da obra:</b> <a href=".$informacoes->link." target='_blank' >".$informacoes->link."</a></li>";
					}
					echo "<br>";
				echo "<i>".$informacoes->notas."</i>";
				echo "<br><br>";
				
				$sql2 = mysqli_query($con,"SELECT * FROM capitulos WHERE obra_origem LIKE '%".$informacoes->titulo."%' ORDER BY capitulo");
				$numRegistros2 =  $sql2->num_rows;
				
				if ($numRegistros2 != 0) {
					echo "<details>";
					echo "<summary>". ("Capítulos")."</summary>";
					while ($informacoes = $sql2 -> fetch_object()) {
						
						echo "<ul>";
						echo  ("<li><b>Capítulo: </b>").$informacoes->capitulo."</b></li>";
						echo  ("<li><b>Título: </b>").$informacoes->titulo."</li>";
						echo  ("<li><b>Citações: </b><q>").$informacoes->citacao."</q></li>";
						echo "<br>";
						echo  ("<li><b>Resumo: </b>").$informacoes->resumo."</li>";
						echo  ("<li><b>Link: </b>").$informacoes->link."</li>";
						echo "<br>";
						echo "<i>".$informacoes->notas."</i>";
						echo "<hr>";
						echo "</ul>";
					}
						echo "</details>";
				}
			echo "<br><hr>";
		}
			
	} else echo "Nenhum livro foi encontrado";
}

$categoria = $_POST['categoria'];
$palavras_chave = $_POST['palavras_chave'];

if($tipo == "artigo"){
	$sql = mysqli_query($con,"SELECT * FROM artigos WHERE titulo LIKE '%".$titulo."%' AND autor LIKE '%".$autor."%' AND pasta LIKE '%".$pasta."%' AND ano_publicacao LIKE '%".$ano_pub."%' AND categoria LIKE '%".$categoria."%' AND mes_lido LIKE '%".$mes_lido."%' AND ano_lido LIKE '%".$ano_lido."%' AND palavra_chave LIKE '%".$palavras_chave."%'");
	$numRegistros =  $sql->num_rows;
	if ($numRegistros != 0) {
			while ($informacoes = $sql -> fetch_object()) {
				echo "<h3>".$informacoes->titulo."</h3>";
				echo "<i><b>".$informacoes->categoria."</b></i>";
				echo "<li><b>Pasta:</b> ".$informacoes->pasta."</li>";
					$autor = $informacoes->autor;
					$autores = (explode(";",$autor));
					$cont = count($autores);
					echo "<li><b>Autor(es):</b> ";
					for($i=0;$i<$cont;$i++){
						if($autores[$i] != "")
						echo $autores[$i]."; ";
					}
					echo "</li>";
					$palavra_chave = $informacoes->palavra_chave;
					$palavras_chave = (explode(".",$palavra_chave));
					$cont = count($palavras_chave);
					echo "<li><b>Palavras-chave:</b> ";
					for($i=0;$i<$cont;$i++){
						if($palavras_chave[$i] != "")
						echo $palavras_chave[$i].". ";
					}
					echo "</li>";
				echo  ("<li><b>Ano de publicação:</b> ").$informacoes->ano_publicacao."</li>";
				echo "<li><b>Lido em:</b> ".$informacoes->mes_lido."/".$informacoes->ano_lido."</li>";
				if(!empty($informacoes->citacao)){
					echo "<details>";
					echo "<summary>". ("<b><u>Citações de interesse</u></b>")."</summary>";
						$citacao = $informacoes->citacao;
						$citacoes = (explode(";",$citacao));
						$cont = count($citacoes);
						echo "<ul>";
						for($i=0;$i<$cont;$i++){
							if($citacoes[$i] != "")
							echo "<li><q>".$citacoes[$i]."</q></li>";
						}
						echo "<br>";
						echo "</ul>";
					echo "</details>";
				}
					if(!empty($informacoes->resumo)){
					echo "<li><b>Resumo escrito da obra:</b> ".$informacoes->resumo."</li>";
					}else{
						if(!empty($informacoes->link))
						echo "<li><b>Link para um resumo/resenha da obra:</b> <a href=".$informacoes->link." target='_blank' >".$informacoes->link."</a></li>";
					}
					echo "<br>";
				echo "<i>".$informacoes->notas."</i>";
				echo "<br><hr>";
			}
			
	} else echo "Nenhum arquivo foi encontrado";
}

$formato = $_POST['formato'];

if($tipo == "texto"){
	$sql = mysqli_query($con,"SELECT * FROM textos WHERE titulo LIKE '%".$titulo."%' AND autor LIKE '%".$autor."%' AND pasta LIKE '%".$pasta."%' AND ano_publicacao LIKE '%".$ano_pub."%' AND formato LIKE '%".$formato."%' AND mes_lido LIKE '%".$mes_lido."%' AND ano_lido LIKE '%".$ano_lido."%'");
	$numRegistros =  $sql->num_rows;
	if ($numRegistros != 0) {
			while ($informacoes = $sql -> fetch_object()) {
				echo "<h3>".$informacoes->titulo."</h3>";
				echo "<a href =".$informacoes->link." target='_blank' >".$informacoes->link."</a>";echo "<br>";echo "<br>";
				echo "<li><b><u><i>Formato: ".$informacoes->formato."</b></u></i></li>";
				echo "<li><b>Pasta:</b> ".$informacoes->pasta."</li>";
					$autor = $informacoes->autor;
					$autores = (explode(";",$autor));
					$cont = count($autores);
					echo "<li><b>Autor(es):</b> ";
					for($i=0;$i<$cont;$i++){
						if($autores[$i] != "")
						echo $autores[$i]."; ";
					}
					echo "</li>";
				echo  ("<li><b>Ano de publicação:</b> ").$informacoes->ano_publicacao."</li>";
				echo "<li><b>Lido em:</b> ".$informacoes->mes_lido."/".$informacoes->ano_lido."</li>";
				if(!empty($informacoes->citacao)){
					echo "<details>";
					echo "<summary>". ("<b><u>Citações de interesse</u></b>")."</summary>";
						$citacao = $informacoes->citacao;
						$citacoes = (explode(";",$citacao));
						$cont = count($citacoes);
						echo "<ul>";
						for($i=0;$i<$cont;$i++){
							if($citacoes[$i] != "")
							echo "<li><q>".$citacoes[$i]."</q></li>";
						}
						echo "<br>";
						echo "</ul>";
					echo "</details>";
				}
				echo "<br>";
				echo "<i>".$informacoes->notas."</i>";
				echo "<br><hr>";
			}
			echo "</ul>";
	} else echo  ("Nenhum texto ou vídeo foi encontrado");
}


if(empty($tipo)){
	$sql = mysqli_query($con,"SELECT * FROM artigos WHERE titulo LIKE '%".$titulo."%' AND autor LIKE '%".$autor."%' AND pasta LIKE '%".$pasta."%' AND ano_publicacao LIKE '%".$ano_pub."%' AND categoria LIKE '%".$categoria."%' AND mes_lido LIKE '%".$mes_lido."%' AND ano_lido LIKE '%".$ano_lido."%' AND palavra_chave LIKE '%".$palavras_chave."%'");
	$sql2 = mysqli_query($con,"SELECT * FROM livros WHERE titulo LIKE '%".$titulo."%' AND autor LIKE '%".$autor."%' AND pasta LIKE '%".$pasta."%' AND ano_publicacao LIKE '%".$ano_pub."%' AND genero LIKE '%".$genero."%' AND editora LIKE '%".$editora."%' AND mes_lido LIKE '%".$mes_lido."%' AND ano_lido LIKE '%".$ano_lido."%'");
	$sql3 = mysqli_query($con,"SELECT * FROM textos WHERE titulo LIKE '%".$titulo."%' AND autor LIKE '%".$autor."%' AND pasta LIKE '%".$pasta."%' AND ano_publicacao LIKE '%".$ano_pub."%' AND formato LIKE '%".$formato."%' AND mes_lido LIKE '%".$mes_lido."%' AND ano_lido LIKE '%".$ano_lido."%'");
	$numRegistros =  $sql->num_rows;
	$numRegistros2 =  $sql2->num_rows;
	$numRegistros3 =  $sql3->num_rows;
	
	if($numRegistros == 0 && $numRegistros2 == 0 && $numRegistros3 == 0){
		echo "Nada foi encontrado";
	}
	
	if ($numRegistros != 0) {
		echo "<ul>";
			while ($informacoes = $sql -> fetch_object()) {
				echo "<h3>".$informacoes->titulo."</h3>";
				echo "<i><b>".$informacoes->categoria."</b></i>";
				echo "<li><b>Pasta:</b> ".$informacoes->pasta."</li>";
					$autor = $informacoes->autor;
					$autores = (explode(";",$autor));
					$cont = count($autores);
					echo "<li><b>Autor(es):</b> ";
					for($i=0;$i<$cont;$i++){
						if($autores[$i] != "")
						echo $autores[$i]."; ";
					}
					echo "</li>";
					$palavra_chave = $informacoes->palavra_chave;
					$palavras_chave = (explode(".",$palavra_chave));
					$cont = count($palavras_chave);
					echo "<li><b>Palavras-chave:</b> ";
					for($i=0;$i<$cont;$i++){
						if($palavras_chave[$i] != "")
						echo $palavras_chave[$i].". ";
					}
					echo "</li>";
				echo  ("<li><b>Ano de publicação:</b> ").$informacoes->ano_publicacao."</li>";
				echo "<li><b>Lido em:</b> ".$informacoes->mes_lido."/".$informacoes->ano_lido."</li>";
				if(!empty($informacoes->citacao)){
					echo "<details>";
					echo "<summary>". ("<b><u>Citações de interesse</u></b>")."</summary>";
						$citacao = $informacoes->citacao;
						$citacoes = (explode(";",$citacao));
						$cont = count($citacoes);
						echo "<ul>";
						for($i=0;$i<$cont;$i++){
							if($citacoes[$i] != "")
							echo "<li><q>".$citacoes[$i]."</q></li>";
						}
						echo "<br>";
						echo "</ul>";
					echo "</details>";
				}
					if(!empty($informacoes->resumo)){
					echo "<li><b>Resumo escrito da obra:</b> ".$informacoes->resumo."</li>";
					}else{
						if(!empty($informacoes->link))
						echo "<li><b>Link para um resumo/resenha da obra:</b> <a href=".$informacoes->link." target='_blank' >".$informacoes->link."</a></li>";
					}
					echo "<br>";
				echo "<i>".$informacoes->notas."</i>";
				echo "<br><hr>";
			}
			echo "</ul>";
	}
	if ($numRegistros2 != 0) {
		echo "<ul>";
			while ($informacoes = $sql2 -> fetch_object()) {
				echo "<h3>".$informacoes->titulo."</h3>";
				echo "<li><b>Pasta:</b> ".$informacoes->pasta."</li>";
					$autor = $informacoes->autor;
					$autores = (explode(";",$autor));
					$cont = count($autores);
					echo "<li><b>Autor(es):</b> ";
					for($i=0;$i<$cont;$i++){
						if($autores[$i] != "")
						echo $autores[$i]."; ";
					}
					echo "</li>";
				echo  ("<li><b>Gênero:</b> ".$informacoes->genero)."</li>";
				echo "<li><b>Editora:</b> ".$informacoes->editora."</li>";
				echo  ("<li><b>Ano de publicação:</b> ").$informacoes->ano_publicacao."</li>";
				echo "<li><b>Lido em:</b> ".$informacoes->mes_lido."/".$informacoes->ano_lido."</li>";

				if(!empty($informacoes->citacao)){
					echo "<details>";
					echo "<summary>". ("<b><u>Citações de interesse</u></b>")."</summary>";
						$citacao = $informacoes->citacao;
						$citacoes = (explode(";",$citacao));
						$cont = count($citacoes);
						echo "<ul>";
						for($i=0;$i<$cont;$i++){
							if($citacoes[$i] != "")
							echo "<li><q>".$citacoes[$i]."</q></li>";
						}
						echo "<br>";
						echo "</ul>";
					echo "</details>";
				}

				echo "<li><b>Status:</b> ".$informacoes->status."</li>";
					if(!empty($informacoes->resumo)){
					echo "<li><b>Resumo escrito da obra:</b> ". ($informacoes->resumo)."</li>";
					}else{
						if(!empty($informacoes->link))
						echo "<li><b>Link para um resumo/resenha da obra:</b> <a href=".$informacoes->link." target='_blank' >".$informacoes->link."</a></li>";
					}
					echo "<br>";
				echo "<i>".$informacoes->notas."</i>";
				echo "<br><br>";
				
				$sql4 = mysqli_query($con,"SELECT * FROM capitulos WHERE obra_origem LIKE '%".$informacoes->titulo."%' ORDER BY capitulo");
				$numRegistros4 =  $sql4->num_rows;
				
				if ($numRegistros4 != 0) {
					echo "<details>";
					echo "<summary>". ("Capítulos")."</summary>";
					while ($informacoes = $sql4 -> fetch_object()) {
						
						echo "<ul>";
						echo  ("<li><b>Capítulo: ").$informacoes->capitulo."</b></li>";
						echo  ("<li><b>Título: </b>").$informacoes->titulo."</li>";
						echo  ("<li><b>Citações: </b><q>").$informacoes->citacao."</q></li>";
						echo "<br>";
						echo  ("<li><b>Resumo: </b>").$informacoes->resumo."</li>";
						echo  ("<li><b>Link: </b>").$informacoes->link."</li>";
						echo "<br>";
						echo "<i>".$informacoes->notas."</i>";
						echo "<hr>";
						echo "</ul>";
					}
						echo "</details>";
				}
			echo "<br><hr>";
			}
			echo "</ul>";
	}
	if ($numRegistros3 != 0) {
		echo "<ul>";
			while ($informacoes = $sql3 -> fetch_object()) {
				echo "<h3>".$informacoes->titulo."</h3>";
				echo "<a href =".$informacoes->link." target='_blank' >".$informacoes->link."</a>";echo "<br>";echo "<br>";
				echo "<li><b><u><i>Formato: ".$informacoes->formato."</b></u></i></li>";
				echo "<li><b>Pasta:</b> ".$informacoes->pasta."</li>";
					$autor = $informacoes->autor;
					$autores = (explode(";",$autor));
					$cont = count($autores);
					echo "<li><b>Autor(es):</b> ";
					for($i=0;$i<$cont;$i++){
						if($autores[$i] != "")
						echo $autores[$i]."; ";
					}
					echo "</li>";
				echo  ("<li><b>Ano de publicação:</b> ").$informacoes->ano_publicacao."</li>";
				echo "<li><b>Lido em:</b> ".$informacoes->mes_lido."/".$informacoes->ano_lido."</li>";
				if(!empty($informacoes->citacao)){
					echo "<details>";
					echo "<summary>". ("<b><u>Citações de interesse</u></b>")."</summary>";
						$citacao = $informacoes->citacao;
						$citacoes = (explode(";",$citacao));
						$cont = count($citacoes);
						echo "<ul>";
						for($i=0;$i<$cont;$i++){
							if($citacoes[$i] != "")
							echo "<li><q>".$citacoes[$i]."</q></li>";
						}
						echo "<br>";
						echo "</ul>";
					echo "</details>";
				}
				echo "<br>";
				echo "<i>".$informacoes->notas."</i>";
				echo "<br><hr>";
			}
			echo "</ul>";
	}
}
?>