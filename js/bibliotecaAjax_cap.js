var ajax;
var dadosUsuario;

// ------- cria o objeto e faz a requisi��o -------
function requisicaoHTTP2(tipo,url,assinc,funcao){
	if(window.XMLHttpRequest){	  // Mozilla, Safari,...
		ajax = new XMLHttpRequest();
	} 
	else if (window.ActiveXObject){	// IE
		ajax = new ActiveXObject("Msxml2.XMLHTTP");
		if (!ajax) {
			ajax = new ActiveXObject("Microsoft.XMLHTTP");
		}
    }      
    
	if(ajax)	// iniciou com sucesso
		iniciaRequisicao2(tipo,url,assinc,funcao);
	else
		alert("Seu navegador n�o possui suporte a essa aplica��o!");
}

// ------- Inicializa o objeto criado e envia os dados (se existirem) -------
function iniciaRequisicao2(tipo,url,bool,funcao){
	ajax.onreadystatechange=funcao;
	ajax.open(tipo,url,bool);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
	//ajax.overrideMimeType("text/XML");   /* usado somente no Mozilla */
	ajax.send(dadosUsuario);
}
