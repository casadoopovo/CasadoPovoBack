## Instalação

- Instalar em um servidor com Apache 2.4.25, PHP 7.0.15 e MySql 5.0.12(Ex. WAMP, XAMP, MAMP, LAMP)
- Criar uma base de dados no MySql
- Instalar o Git local e executar "git clone https://github.com/casadoopovo/CasadoPovoBack.git" na pasta pública do servidor
- Entrar no diretório do projeto, duplicar o arquivo .env-example, renomear para .env e preencher com os dados da conexão com o database.
- Instalar o Composer e executar no terminal o comando "composer install". Em seguida execute "php artisan key:generate"
- Executar o comando "php artisan migrate"
- Executar no terminal o comando "php artisan serve"
- Acessar a URL http://127.0.0.1:8000
- Clique em Register para criar um perfil de usuário.
