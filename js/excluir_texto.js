function Confirma(){
	var conf = confirm("Deseja realmente excluir esses dados?");
	if(conf){
		var space = document.getElementById("titulo_mudar").value;
		if(space != ""){
			document.getElementById('theForm').onsubmit = enviaDados('php/excluir_texto_ok.php');
			document.getElementById('theForm').reset();
		}else{alert("A obra de origem não pode ficar vazia... DE JEITO NENHUM!!!!");}
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
  var url = "php/select_texto.php?manda="+encodeURIComponent(selecionado);
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
	
	document.getElementById("link_resumo_texto").value = res[2];
	
	var pasta = document.getElementById("pasta");
	var opt1 = document.createElement("option");
    opt1.value = res[3];
    opt1.text = res[3];
    pasta.add(opt1, pasta.options[0]);
	pasta.selectedIndex = res[3];
	
	document.getElementById("ano_pub").value = res[4];
	
	var mes_lido_texto = document.getElementById("mes_lido_texto");
	var opt1 = document.createElement("option");
	opt1.value = res[5];
    opt1.text = res[5];
    mes_lido_texto.add(opt1, mes_lido_texto.options[0]);
	mes_lido_texto.selectedIndex = res[5];
	
	document.getElementById("ano_lido_texto").value = res[6];
	
	var format = document.getElementById("formato");
	var opt1 = document.createElement("option");
    opt1.value = res[7];
    opt1.text = res[7];
    format.add(opt1, format.options[0]);
	format.selectedIndex = res[7];
	
	document.getElementById("notas").value = res[8];
	document.getElementById("citacao").value = res[9];
}