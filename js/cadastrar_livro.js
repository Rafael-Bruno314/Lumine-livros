function Valida_texto(titulo){
	if(titulo == "" || titulo == " ")
	{
		document.getElementById("titulo").placeholder = "Escreva algum título aqui...";
	}
}

function Confirma(){
	var conf = confirm("Deseja realmente cadastrar?");
	if(conf){
		var space = document.getElementById("titulo").value;
		if(space != ""){
			document.getElementById('theForm').onsubmit = enviaDados('php/cadastrar_livro_ok.php');
			document.getElementById('theForm').reset();
		}else{alert("O título não pode ficar vazio... DE JEITO NENHUM!!!!");}
	}
}
function  Add_genero(){
	
	var gen = document.getElementById("genero").value;
	
	if(gen == "outro"){
		var novo = prompt("Adicione um novo:");
		if (novo == null || novo == "") {
			alert("Imaginei...")
		} else {
			Manda_genero(novo);
		}
	}
}

function Manda_genero(genero){
	if(genero){	
	
		document.getElementById("trapaca_genero").value = genero;
		
		var gen = document.getElementById("genero");
		var opt0 = document.createElement("option");
		opt0.value = genero;
		opt0.text = genero;
		gen.add(opt0, gen.options[0]);
		
		for (var i = 0; i < gen.options.length; i++)
		{
			if (gen.options[i].value == genero)
			{
				gen.options[i].selected = "true";
				break;
			}
		}
	}
}

function  Add_pasta(){
	
	var pas = document.getElementById("pasta").value;
	
	if(pas == "outro"){
		var novo = prompt("Adicione uma nova:");
		if (novo == null || novo == "") {
			alert("Imaginei...")
		} else {
			Manda_pasta(novo);
		}
	}
}

function Manda_pasta(pasta){
	if(pasta){
		document.getElementById("trapaca_pasta").value = pasta;
		
		var pas = document.getElementById("pasta");
		var opt0 = document.createElement("option");
		opt0.value = pasta;
		opt0.text = pasta;
		pas.add(opt0, pas.options[0]);
		
		for (var i = 0; i < pas.options.length; i++)
		{
			if (pas.options[i].value == pasta)
			{
				pas.options[i].selected = "true";
				break;
			}
		}
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

function Add_autor(){
	var autores, i;
	
	autores = document.getElementById("autor").value;
	
	var textbox = document.createElement('input');
	textbox.type = 'text';
	textbox.name = 'ola';
	textbox.placeholder = 'Autor';
	var mostrar = document.getElementById('mostrar_autor').appendChild(textbox);
}

function Ajeita_autor(){
	
	var campo_extra = document.getElementsByName('ola');	
	var autor1 = document.getElementById("autor").value;
	if(autor1) autor1 = autor1+';';
	var e = "";
	
	for(i=0;i<campo_extra.length;i++)
	{
		var textos = campo_extra[i].value;
		e += textos+";";
	}
	e = autor1+ e;
	Manda_dados_autor(e);
}

function Manda_dados_autor(autor)
{
	document.getElementById("mostrar_autor_marcado").value=autor;
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