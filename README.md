Fiz os testes utilizando XAMPP, com Apache e MySQL, (apachefriends.org/pt_br/index.html)
usando o "phpMyAdmin" incluso no XAMPP para banco de dados, por enquanto tudo funciona normal.

A página inicial "index.php" é acessível a qualquer um, ao clicar em "Admin Dashboard"
O usuário é redirecionado para a página de login, logando com o "adminteste", senha "123" (definidos manualmente no banco de dados)
Se logado corretamente, vai para a página de administração.
(Se tentar acessar admin/admin.php pela URL, é redirecionado para o login)

Em caso de erro: 
	- verificar se "extension=pdo_mysql" está comentado no arquivo "php.ini",
	Abra o XAMPP, clique nas configurações do Apache, php.ini, e remova o ponto e vírgula do começo de "extension=pdo_mysql".
	- verificar se o phpMyAdmin foi instalado junto com o XAMPP durante a instalação do XAMPP

------------------------------------

PARA IMPORTAR O BANCO DE DADOS:
	Acesse o phpMyAdmin na URL (localhost/phpmyadmin) com o servidor e o MySQL ligados no XAMPP.
	Crie um novo banco de dados na esquerda em "Novo"
	Coloque como nome "marchiatto_db"
	Ainda no phpMyAdmin, Selecione "Importar" no topo do menu, adicione o arquivo do repositório,
	importe o arquivo "marchiatto_db.sql"
	Mantenha todas as opções padrão, clique em "Importar" no fim da página.
	Agora sua máquina tem o banco de dados atualizado com o usuário admin.

------------------------------------

16/04

-Adicionado funções em PHP: connect.php; logar.php; logout.php; user.class.php; verifica.php.

-Adicionado página de admin com requisição de login: admin/admin.php

-Adicionado banco de dados MySQL "marchiatto_db" com tabela "usuarios"
	Com campos: idUsuario, nome e senha (md5)
	Adicionado usuário; 1, adminteste, 123

-Adicionado "login.php" e "login.css"

-Atualizado "index.php" com botão para "ADMIN DASHBOARD", levando até a página de admin

-Arquivos organizados: páginas web no diretório raiz; funções em php na pasta "php"; páginas de admin na pasta "admin"

Atualizações necessárias:
	> Adicionar possibilidade de registrar clientes em uma nova tabela no banco de dados através de formulário,
	  com nome e número, e consultá-los dentro da aplicação web.
