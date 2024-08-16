function Valida_cap(cap){
	cap = Number(cap);
	if(cap <= 999){
	}else{
		alert("O capítulo DEVE ser um número");
		document.getElementById("num_cap").value = 0;
	}
}

function Mostra_num_cap(origem){

	if(origem == "origem"){
		document.getElementById("num_cap").style.display = "none";
	}else{
		document.getElementById("num_cap").style.display = "block";
	}	
}

function loadDoc(cFunction,cap) {//Olha_cap e valor
  var xhttp;
  var origem = document.getElementById("origem").value;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  var url = 'php/olha_cap_num.php?cap='+cap+'&origem='+origem;
  xhttp.open("GET",url, true);
  xhttp.send();
}
function Olha_cap(xhttp) {
	var resposta = xhttp.responseText;
	if(resposta == "verdadeiro"){
		alert("Já existe este capítulo");
		document.getElementById("num_cap").value = "";
		document.getElementById("num_cap").placeholder = "Cap.";
	}
}


function Confirma(){
	var conf = confirm("Deseja realmente cadastrar?");
	if(conf){
		var space = document.getElementById("titulo_capitulo").value;
		var time = document.getElementById("num_cap").value;
		var quantum = document.getElementById("origem").value;
		if(space != "" && time != "" && quantum != "origem"){
			document.getElementById('theForm').onsubmit = enviaDados('php/cadastrar_capitulo_ok.php');
			document.getElementById('theForm').reset();
		}else{alert("O título, o número do capítulo e/ou a obra de origem não podem ficar vazios... DE JEITO NENHUM!!!!");}
	}
}

function Mostra_link(){
	
	var check_link = document.getElementById("link_resumo").checked;
	if(check_link){
		var olha_olha = confirm("Toda a escrita será perdida. Tem certeza que vai dar esse vacilo?");
		if(olha_olha){
			document.getElementById("resumo").value = "";
			document.getElementById("resumo").style.display = "none";
			document.getElementById("link_resumo_texto").style.display = "block";
		}
	}else{
		document.getElementById("resumo").style.display = "block";
		document.getElementById("link_resumo_texto").style.display = "none";
		document.getElementById("link_resumo_texto").value = "";
	}
}

function Add_citacao(){
	var citacoes, i;
	
	citacoes = document.getElementById("citacao").value;
	
	var textarea = document.createElement('textarea');
	textarea.name = 'citcon';
	textarea.placeholder = 'Citação...';
	textarea.cols="80";
	textarea.rows="4";
	var mostrar = document.getElementById('mostrar_citacao').appendChild(textarea);
}

function Ajeita_citacao(){
	
	var campo_extra = document.getElementsByName('citcon');
	var citacao1 = document.getElementById("citacao").value;
	if(citacao1) citacao1 = citacao1+';';
	var e = "";
	
	for(i=0;i<campo_extra.length;i++)
	{	
		var textos = campo_extra[i].value;
		e += textos+';';
	}
	e = citacao1+ e;

	Manda_dados(e);
}

function Manda_dados(citacao)
{
	document.getElementById("mostrar_citacao_marcada").value=citacao;
}

function trataDados(){
	var info = ajax.responseText;  // obter a resposta como string
	var div = document.getElementById("saida");
	alert("Cadastrado com sucesso!");
	div.innerHTML=info;
}