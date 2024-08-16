function Confirma(){
	var conf = confirm("Deseja realmente excluir esses dados?");
	if(conf){
		var space = document.getElementById("titulo_mudar").value;
		if(space != ""){
			document.getElementById('theForm').onsubmit = enviaDados('php/excluir_livro_ok.php');
			document.getElementById('theForm').reset();
		}else{alert("A obra de origem não pode ficar vazia... DE JEITO NENHUM!!!!");}
	}
}

function Mostra_link(){
	
	var check_link = document.getElementById("link_resumo").checked;
	if(check_link){
		document.getElementById("resumo").style.display = "none";
		document.getElementById("link_resumo_texto").style.display = "block";
	}else{
		document.getElementById("link_resumo_texto").style.display = "none";
		document.getElementById("resumo").style.display = "block";
	}
}

function trataDados(){
	var info = ajax.responseText;  // obter a resposta como string
	var div = document.getElementById("saida");
	alert("Excluido com sucesso!");
	div.innerHTML=info;
}

function loadDoc(cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  var manda = document.getElementById("titulo_mudar");
  var selecionado = manda.options[manda.selectedIndex].value;
  var url = "php/select_livro.php?manda="+encodeURIComponent(selecionado);
  xhttp.open("GET",url, true);
  xhttp.send();
}
function myFunction(xhttp) {
	var resposta = xhttp.responseText; // obter a resposta como string
	Tratar_resposta(resposta);
}

function Tratar_resposta(resposta){ //
    var res = resposta.split("@");
	var mostra = "";
	var quant = res.length;
	for(var i=0;i<quant;i++){
		mostra += res[i] + "<br>";
	}
	document.getElementById("titulo").value = res[0];
	
	document.getElementById("autor").value = res[1];
	
	var genero = document.getElementById("genero");
	
	var opt0 = document.createElement("option");
    opt0.value = res[3];
    opt0.text = res[3];
    genero.add(opt0, genero.options[0]);
	genero.selectedIndex = res[3];
	
	document.getElementById("editora").value = res[4];
	
	var mes_lido_livro = document.getElementById("mes_lido_livro");
	var opt1 = document.createElement("option");
	opt1.value = res[6];
    opt1.text = res[6];
    mes_lido_livro.add(opt1, mes_lido_livro.options[0]);
	mes_lido_livro.selectedIndex = res[6];
	
	document.getElementById("ano_lido_livro").value = res[7];
	document.getElementById("ano_pub").value = res[5];
	
	var stats = document.getElementById("status");
	var opt1 = document.createElement("option");
    opt1.value = res[10];
    opt1.text = res[10];
    stats.add(opt1, stats.options[0]);
	stats.selectedIndex = res[10];
	
	document.getElementById("notas").value = res[8];
	document.getElementById("citacao").value = res[9];
	
	var pasta = document.getElementById("pasta");
	var opt1 = document.createElement("option");
    opt1.value = res[2];
    opt1.text = res[2];
    pasta.add(opt1, pasta.options[0]);
	pasta.selectedIndex = res[2];
	
	document.getElementById("resumo").value = res[11];
	if(document.getElementById("resumo").value == ""){
		document.getElementById("resumo").style.display = "none";
		document.getElementById("link_resumo_texto").style.display = "block";
	}
	document.getElementById("link_resumo_texto").value = res[12];
}