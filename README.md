# formCadastro

Formulário de Cadastro de Contatos
=
Este projeto é um sistema de cadastro de contatos desenvolvido em PHP com a arquitetura MVC, utilizando MySQL e PDO para conexão com o banco de dados.
O sistema foi feito como forma de teste para um processo seletivo na empresa Alphacode IT Solutions

--------------------------------
Instruções para Configuração:

Requisitos:

PHP 7.4 ou superior

MySQL

Servidor Web (Apache ou Nginx)

--------------------------------

Clone o repositório usando o comando:

git clone https://github.com/SeredaCoding/formCadastro

--------------------------------

Configuração do Servidor Web:

Copie o projeto para o diretório raiz do seu servidor web, por exemplo:

Para XAMPP: htdocs

Para WAMP: www

Para outros servidores, ajuste conforme necessário.

--------------------------------

Configuração do Banco de Dados:

Exporte o arquivo dump/cadastros_contatos.sql para o seu servidor MySQL. O arquivo já inclui o comando CREATE DATABASE IF NOT EXISTS, portanto, o banco de dados será criado automaticamente.

Com phpMyAdmin:

Acesse phpMyAdmin.
Selecione o banco de dados desejado.
Vá para a aba "Importar" e faça o upload do arquivo cadastros_contatos.sql.

Com a linha de comando:

mysql -u <USUARIO> -p < < dump/cadastros_contatos.sql

Configure também o arquivo de configuração para conexão com o banco de dados caso achar necessário:

 Localize o arquivo config/database.php e insira suas credenciais de banco de dados.

--------------------------------

Abra seu navegador e acesse http://localhost/formCadastro para visualizar o formulário de cadastro.
