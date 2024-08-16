function Confirma(){
	var conf = confirm("Deseja realmente excluir esses dados?");
	if(conf){
		var space = document.getElementById("titulo_mudar").value;
		if(space != ""){
			document.getElementById('theForm').onsubmit = enviaDados('php/excluir_arquivo_ok.php');
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
  var url = "php/select_arquivo.php?manda="+encodeURIComponent(selecionado);
  xhttp.open("GET",url, true);
  xhttp.send();
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
  var url = "php/select_arquivo.php?manda="+encodeURIComponent(selecionado);
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
	
	document.getElementById("autor").value = res[2];
	
	var categoria = document.getElementById("categoria");
	
	var opt0 = document.createElement("option");
    opt0.value = res[1];
    opt0.text = res[1];
    categoria.add(opt0, categoria.options[0]);
	categoria.selectedIndex = res[1];
	
	document.getElementById("palavra_chave").value = res[3];
	
	var mes_lido_arquivo = document.getElementById("mes_lido_arquivo");
	var opt1 = document.createElement("option");
	opt1.value = res[5];
    opt1.text = res[5];
    mes_lido_arquivo.add(opt1, mes_lido_arquivo.options[0]);
	mes_lido_arquivo.selectedIndex = res[5];
	
	document.getElementById("ano_lido_arquivo").value = res[6];
	document.getElementById("ano_pub").value = res[4];
	
	document.getElementById("notas").value = res[7];
	document.getElementById("citacao").value = res[8];
	
	var pasta = document.getElementById("pasta");
	var opt1 = document.createElement("option");
    opt1.value = res[9];
    opt1.text = res[9];
    pasta.add(opt1, pasta.options[0]);
	pasta.selectedIndex = res[9];
	
	document.getElementById("resumo").value = res[10];
	if(document.getElementById("resumo").value == ""){
		document.getElementById("resumo").style.display = "none";
		document.getElementById("link_resumo_texto").style.display = "block";
	}
	document.getElementById("link_resumo_texto").value = res[11];
}