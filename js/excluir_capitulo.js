function Confirma(){
	var conf = confirm("Deseja realmente excluir esses dados?");
	if(conf){
		var time = document.getElementById("num_cap").value;
		var quantum = document.getElementById("origem").value;
		if(time != "num_cap" && quantum != "origem"){
			document.getElementById('theForm').onsubmit = enviaDados('php/excluir_capitulo_ok.php');
			document.getElementById('theForm').reset();
			document.getElementById("num_cap").style.display = "none";
		}else{alert("A obra de origem e o número do capítulo não podem ficar vazios... DE JEITO NENHUM!!!!");}
	}
}

function Envia_origem(origem){
	var url = 'php/select_origem.php?origem='+origem;
	requisicaoHTTP2("GET",url,true,Resposta_origem);
}

function Resposta_origem(){
	if(ajax.readyState == 4){
		if(ajax.status == 200){
			listaOrigem();  // criar essa função no seu programa
		} else {
			alert("Problema na comunicação com o objeto XMLHttpRequest.");
		}
	}
}

function listaOrigem(){
	var info = ajax.responseText;
		
	var num_cap = document.getElementById("num_cap");
	var euler = 0;
	for(euler = 0; euler <= num_cap.childNodes.length; euler++){
		num_cap.removeChild(num_cap.lastChild);
	}
	var opt3 = document.createElement("option");
	var opt4 = document.createTextNode("Cap.");
	opt3.appendChild(opt4);
	num_cap.appendChild(opt3);
	
	var res = info.split("@");
	var quant = res.length;
	if(quant == 0)quant = 1;
	for(var i=0;i<quant-1;i++){
		if(quant == 0)quant = 1;
		var opt0 = document.createElement("option");
		opt0.value = res[i];
		opt0.text = res[i];
		num_cap.appendChild(opt0, num_cap.options[i]);
	}
		
}

function Mostra_num_cap(origem){

	if(origem == "origem"){
		document.getElementById("num_cap").style.display = "none";
	}else{
		document.getElementById("num_cap").style.display = "block";
	}
}

function Executar_valores(origem,num_cap){
	var url = 'php/select_capitulo.php?origem='+origem+'&num_cap='+num_cap;
	requisicaoHTTP2("GET",url,true,Resposta_valores);
}

function Mostrar_resultado(){
	var origem = document.getElementById("origem").value;
	var num_cap = document.getElementById("num_cap").value;
	Executar_valores(origem,num_cap);	
}

function Resposta_valores(){
	if(ajax.readyState == 4){
		if(ajax.status == 200){
			listaValores();  // criar essa função no seu programa
		} else {
			alert("Problema na comunicação com o objeto XMLHttpRequest.");
		}
	}
}

function listaValores(){
	var info = ajax.responseText;  // obter a resposta como string
	
	var res = info.split("@");
	var quant = res.length;
	for(var i=0;i<quant;i++){
		
		document.getElementById("titulo_capitulo").value = res[1];
		
		var mes_lido_capitulo = document.getElementById("mes_lido_capitulo");
		var opt1 = document.createElement("option");
		opt1.value = res[2];
		opt1.text = res[2];
		mes_lido_capitulo.add(opt1, mes_lido_capitulo.options[0]);
		mes_lido_capitulo.selectedIndex = res[2];
		
		document.getElementById("ano_lido_capitulo").value = res[3];
		
		document.getElementById("notas").value = res[4];
		
		document.getElementById("citacao").value = res[5];
		
		document.getElementById("resumo").value = res[6];
		if(document.getElementById("resumo").value == "" || document.getElementById("resumo").value == "Não definido"){
			document.getElementById("resumo").style.display = "none";
			document.getElementById("link_resumo_texto").style.display = "block";
		}
		document.getElementById("link_resumo_texto").value = res[7];
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
		document.getElementById("link_resumo_texto").value = "";
	}
}

function trataDados(){
	var info = ajax.responseText;  // obter a resposta como string
	alert("Excluido com sucesso");
	var div = document.getElementById("saida");
	div.innerHTML=info;
}
