function Excluir_formato(id,tabela){
	var confirma = confirm("Deseja realmente excluir?");
	alert (id);
	alert (tabela);
	if(confirma){
		var url = 'php/excluir_outros_ok?id='+id+'&tabela='+tabela;
		Manda_dados(tabela);
		requisicaoHTTP("GET",url,true);
	}
}

function Excluir_genero(id,tabela){
	var confirma = confirm("Deseja realmente excluir?");
	if(confirma){
		var url = 'php/excluir_outros_ok?id='+id+'&tabela='+tabela;
		Manda_dados(tabela);
		requisicaoHTTP("GET",url,true);
	}
}

function Excluir_pasta(id,tabela){
	var confirma = confirm("Deseja realmente excluir?");
	if(confirma){
		var url = 'php/excluir_outros_ok?id='+id+'&tabela='+tabela;
		Manda_dados(tabela);
		requisicaoHTTP("GET",url,true);
	}
}

function Excluir_categoria(id,tabela){
	var confirma = confirm("Deseja realmente excluir?");
	if(confirma){
		var url = 'php/excluir_outros_ok?id='+id+'&tabela='+tabela;
		Manda_dados(tabela);
		requisicaoHTTP("GET",url,true);
	}
}

function Manda_dados(id){
	var identidade = document.getElementById(id).id;
	document.getElementById("recebe").value = identidade;
}

function trataDados(){
	var info = ajax.responseText;
	alert("Excluido com sucesso");
	
	/*var caixa = document.getElementById("recebe").value;
	var selecao = document.getElementById(caixa);
	var mostrado = document.getElementById(caixa).value;
	alert(mostrado);
	selecao.removeChild(selecao.selectedIndex);*/
	
	var div = document.getElementById("saida");
	div.innerHTML=info;
}
