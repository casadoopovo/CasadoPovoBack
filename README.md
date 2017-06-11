## Casa do Povo

Ferramenta website aplicativo, onde oferece possibilidade ao cidadão assumir a condição de sujeito meramente coadjuvante no processo democrático, sua atuação, longe de ser um simples dever, consubstancia importante direto de participar ativo e direta na formação de um governo legítimo, fazendo valer, com precisão e perspicácia, a tal propaganda morna constitucional segundo a qual todo poder emana do povo.
A ferramenta tem como proposito primário criar uma base de dados publica com as atividades diárias de todos os vereadores de uma camará, registrando e tornando publico esses dados. Com a obtenção desses dados trabalhar formas estratégicas como exibi-los de forma clara..


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

