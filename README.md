# Lumine-livros

Sistema desenvolvido em PHP para registrar e gerenciar leituras pessoais, permitindo o cadastro e acompanhamento de livros, capítulos e textos.

## 📁 Estrutura do Projeto

### Arquivos PHP:
- Scripts para cadastro, alteração, exclusão e busca de livros, capítulos e textos

### Banco de Dados:
- `lumine.sql`: Arquivo contendo a estrutura do banco de dados MySQL

### Pastas:
- `class/`: Classes utilizadas no projeto
- `css/`: Estilos CSS para a interface
- `js/`: Scripts JavaScript para funcionalidades interativas

## 🛠️ Tecnologias Utilizadas
- **PHP**
- **MySQL**
- **HTML**
- **CSS**
- **JavaScript**

## 🚀 Como Executar

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/Rafael-Bruno314/Lumine-livros.git
   cd Lumine-livros

2. **Configure o ambiente:**

- Instale um servidor local (XAMPP ou WAMP) com suporte a PHP e MySQL

- Mova os arquivos para a pasta do servidor:

  - XAMPP: C:/xampp/htdocs/Lumine-livros

  - WAMP: C:/wamp64/www/Lumine-livros

3. **Importe o banco de dados:**

  - Acesse o phpMyAdmin em http://localhost/phpmyadmin
  
  - Crie um novo banco chamado lumine
  
  - Selecione o banco criado ➔ Abra a aba Importar
  
  - Selecione o arquivo lumine.sql do projeto ➔ Execute

4. **Acesse o sistema:**

- http://localhost/Lumine-livros/login.php

## 📜 Licença
Este projeto está licenciado sob a Licença MIT. Consulte o arquivo LICENSE para detalhes completos.

## 🎯 Objetivo
Sistema pessoal para registro e acompanhamento de leituras, desenvolvido como prática em:

- Integração PHP/MySQL

- Gestão de banco de dados relacional

- CRUD completo (Create, Read, Update, Delete)

- Desenvolvimento de interfaces web básicas
