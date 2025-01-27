LINK PARA O VÍDEO DO PROJETO: 
https://youtu.be/yTVO9G5GYhA

# Projeto Integrador I
# Otimização do atendimento em uma cafeteria através de aplicação web.

- O projeto “Otimização do atendimento em uma cafeteria através de aplicação web” visa
desenvolver uma aplicação web para uma cafeteria tradicional, com o objetivo de automatizar
processos como registros de clientes, pedidos, produtos, e, consequentemente, aprimorar a
eficácia, a velocidade do atendimento e o controle das atividades do negócio. A escolha deste
tema se deu pela necessidade de modernização do atendimento da cafeteria, aliada aos
benefícios proporcionados pela tecnologia da informação. Inicialmente,
foi realizada uma análise do cenário da cafeteria, identificando problemas como os registros
manuais e a ineficácia no atendimento. Posteriormente, durante a fase de ideação foram
levantadas diversas soluções, resultando no desenvolvimento de uma aplicação web. O
desenvolvimento da aplicação será baseado em tecnologias como HTML, CSS, JavaScript,
PHP, além da integração com o banco de dados MySQL para armazenamento de informações.
Além disso, a aplicação possui funcionalidades como registro de clientes, realização de
pedidos e gerenciamento de produtos. Por fim, espera-se que a implementação desta aplicação
web contribua significativamente para a gestão interna da cafeteria e para a melhor
experiência do cliente.


# INSTRUÇÕES

- Inicialize o servidor Apache na pasta raiz do projeto com XAMPP;
- Inicialize o banco de dados MySQL com XAMPP;
- Acesse a página através do 'localhost';
- Acesse a página de Administração com as credenciais cadastradas
  

Em caso de erro:

- verificar se "extension=pdo_mysql" está comentado no arquivo "php.ini",
abra o XAMPP, clique nas configurações do Apache, php.ini, e remova o ponto e vírgula do começo de "extension=pdo_mysql".

  

- verificar se o phpMyAdmin foi instalado junto com o XAMPP durante a instalação do XAMPP

  

------------------------------------

  

PARA IMPORTAR O BANCO DE DADOS:

- Acesse o phpMyAdmin na URL (localhost/phpmyadmin) com o servidor e o MySQL ligados no XAMPP;

- Crie um novo banco de dados na esquerda em "Novo";

- Coloque como nome "marchiatto_db";

- Ainda no phpMyAdmin, Selecione "Importar" no topo do menu, adicione o arquivo do repositório;

- Importe o arquivo "marchiatto_db.sql";

- Mantenha todas as opções padrão, clique em "Importar" no fim da página.

Agora sua máquina possui o banco de dados atualizado com o usuário administrador, produtos, etc.
 

# CHANGELOGS

-Melhorada segurança para evitar exclusão de registros com chaves relacionadas, remover admins únicos, etc.

-Adicionado possibilidade de manipular admins do sistema e melhorada resposta visual para pedidos ativos/não atendidos e atendidos com cores chamativas

-Melhorado CSS e Design da página inicial, conforme feedback do dono da cafeteria, com imagens reais (obtidas no Instagram do café) e removidas seções desnecessárias.

-Adicionado pedidos e manipulação de pedidos, cardápio e manipulação de itens do cardápio. Novas tabelas no banco de dados.
  
-Adicionado possibilidade de Registrar, Excluir, Atualizar e Consultar clientes na database "clientes" (importe o arquivo 'marchiatto_db.sql')

-Adicionado "atualizar_cliente.php"; "cadastrar_cliente.php"; "deletar_cliente";

-Adicionado funções em PHP: connect.php; logar.php; logout.php; user.class.php; verifica.php.

-Adicionado página de admin com requisição de login: admin/admin.php

-Adicionado banco de dados MySQL "marchiatto_db" com tabela "usuarios"

	Com campos: idUsuario, nome e senha (md5)

	Adicionado usuário; 1, marchiatto, 123


-Adicionado "login.php"; "login.css"; "admin.css" e logo do café "logo.jpg"
  
-Atualizado "index.php" com botão para "ADMIN DASHBOARD", levando até a página de admin

-Arquivos organizados: páginas web no diretório raiz; funções em php na pasta "php"; páginas de admin na pasta "admin"
