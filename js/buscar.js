function myFunction()
{
	var opcao = document.getElementById("tipo").value;
	
	if(opcao == "")
	{
		document.getElementById("mostrar_livro").style.display = "none"
		document.getElementById("mostrar_arquivo").style.display = "none"
		document.getElementById("mostrar_texto").style.display = "none"
		//document.getElementById("mostrar_capitulo").style.display = "none"
	}
	
	if(opcao == "livro")
	{
		document.getElementById("mostrar_arquivo").style.display = "none"
		document.getElementById("mostrar_texto").style.display = "none"
		//document.getElementById("mostrar_capitulo").style.display = "none"
		var divstyle = new String();        
		divstyle = document.getElementById("mostrar_livro").style.display;
			  
		if (divstyle=="none")
		{
			document.getElementById("mostrar_livro").style.display = "block";
		}   
	}
	
	/*if(opcao == "capitulo")
	{
		document.getElementById("mostrar_livro").style.display = "none"
		document.getElementById("mostrar_arquivo").style.display = "none"
		document.getElementById("mostrar_texto").style.display = "none"
		var divstyle = new String();        
		divstyle = document.getElementById("mostrar_capitulo").style.display;
			  
		if (divstyle=="none")
		{
			document.getElementById("mostrar_capitulo").style.display = "block";
		}   
	}*/
	
	if(opcao == "artigo")
	{
		document.getElementById("mostrar_livro").style.display = "none"
		document.getElementById("mostrar_texto").style.display = "none"
		//document.getElementById("mostrar_capitulo").style.display = "none"
		var divstyle = new String();        
		divstyle = document.getElementById("mostrar_arquivo").style.display;
			  
		if (divstyle=="none")
		{
			document.getElementById("mostrar_arquivo").style.display = "block";
		}   
	}
	if(opcao == "texto")
	{
		document.getElementById("mostrar_arquivo").style.display = "none"
		document.getElementById("mostrar_livro").style.display = "none"
		//document.getElementById("mostrar_capitulo").style.display = "none"
		var divstyle = new String();        
		divstyle = document.getElementById("mostrar_texto").style.display;
			  
		if (divstyle=="none")
		{
			document.getElementById("mostrar_texto").style.display = "block";
		}
	}
}

function Alerta(teste){	
	alert(teste);
}

function obtemInfo()
{
	var selecionado = document.getElementById("obra_origem").value;
	alert(selecionado);
	if(selecionado){
		var url="php/buscar_resultado.php?obra_origem="+selecionado;
		requisicaoHTTP("GET",url,true);
	}
}

function Add_autor(){
	var autores;
	
	autores = document.getElementById("autor").value;
	alert(autores);
	
}

function trataDados(){
	var info = ajax.responseText;  // obtém a resposta como string
	var div = document.getElementById("saida");
	div.innerHTML=info;
}