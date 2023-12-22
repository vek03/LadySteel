PARA CONTINUAR DESENVOLVENDO:

- Instale o projeto
- Ligue o Painel de Controle do XAMPP e ative o Apache e o MySQL
- Coloque a pasta do projeto dentro da pasta htdocs do XAMPP
- Extraia a pasta do projeto
- Abra o CMD
- cd '<pasta_do_projeto>'
- composer install
- npm install
- Clone o arquivo ".env.example" e renomeie a cópia para ".env" com os dados do seu banco e das suas APIs
- php artisan migrate:fresh --seed ou php artisan migrate --seed(caso não tenha a base na maquina ainda)
- npm run dev
- php artisan serve
- acessar: http://127.0.0.1:8000
- Pronto

CASO DE ERRO NA HORA DE EXECUTAR O MIGRATE:
- Apague a base de dados 'ladysteel_bd' do seu localhost
- php artisan migrate --seed

CASO DE ERRO COM A BASE
- php artisan cache:clear
- php artisan config:clear
- apague todos os arquivos da pasta bootstrap/cache
- reinicie o servidor

COMANDOS ÚTEIS:
- php artisan key:generate - error 500
- Excluir o arquivo hot da pasta public - erro de renderização do tailwind
- php artisan make:Model -cmsr - criar model, controller, migration e seeder com estrutura de uma entidade
- php artisan cache:clear - limpar cache do laravel
- php artisan config:clear - limpar cache de configuração - erro SQL

PARA HOSPEDAR:
Mudar no .ENV: 
- APP_ENV=production
- APP_DEBUG=false
- Credenciais do banco

Comandos:
- npm run build
- php artisan key:generate 
- composer install --optimize-autoloader --no-dev
- php artisan config:cache
- php artisan route:cache
