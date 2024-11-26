# Comandos en general del programa

    pwd
    composer
    laravel
    composer global require laravel/installer
    laravel new primerAplicacoin
    rm * primerAplicacoin
    rm -rf primerAplicacoin
    create-project
    create-project -h
    rm -rf implementacion
    composer self update
    composer -v
    composer clear cache
    rm -rf imp*
    ls -la
    rm -rf im*
    composer config -g process-timeout 1200000000
    composer config -g process-timeout 120000000
    composer config -g process-timeout 15000000
    rm -rf *
    laravel new implementa
    laravel new implementaciones
    composer config -g process-timeout 12000000000
    rm -rf i*
    rm -rf implementa
    rm -RF implementa
    rm --f implementa
    rm --rf implementa
    rm -r-f implementa
    rm -r--f implementa
    rm -rf vendor\
    rm implementacion\
    composer clear-cache --gc
    rm -rf implementacion\
    composer clear-cache
    laravel new implementacin
    laravel new implementacion
    -o
    php artisan migrate
    php artisan router:list
    php artisan route:list
    php artisan make:controller RoleController -r
     php artisan r:1

# Para crear la db
      php artisan make:migration create_posts_table
      php artisan make:migration create_rolls_table
      php artisan make:migration create_roles_table
      php artisan migrate:rollback
      php artisan migrate:rollback --step-2
      php artisan migrate:rollback --step-3
      php artisan migrate:rollback --step-0
      php artisan make:migration create_categorys_table
      php artisan make:migration create_categories_table
      php artisan make:migration add_field_categories_table

# Instalaciones
      composer funds
      composer require laravel/ui --dev
      php artisan ui vue
      npm install
      npm --version
      node -v
      npm install -g npm@10.8.3
      npm -v
      npm run dev
      npm run build
      npm run
      php artisan serve --auth
      php artisan ui vue --auth
      npm install && npm run dev
      php artisan key:generation
      php vendor
      install vendor
      composer self-update
      composer install
      composer update

# Listar rutas
    php artisan r:2
    php artisan r:0
    php artisan make:controller PostController
    php artisan make:controller PostController -r
    php artisan r:l
### Hacer un controlador de tipo resource
    php artisan make:model Post
    php artisan make:model Post -r
    php artisan make:request StorePostRequest
## Refrescar las migraciones
    php artisan migrate:fresh
    php artisan serve
    
### Resto
 94  php artisan migrate:rollback
   95  php artisan make:migration add_field_categories_table
   96  php artisan migrate:rollback --step-0
   97  php artisan migrate:rollback --step-3
   98  php artisan migrate:rollback --step-2
   99  composer self-update
  100  php artisan make:migration create_posts_table
  101  php artisan make:migration create_roles_table
  102  php artisan make:migration create_categorys_table
  103  php artisan make:migration create_categories_table
  104  php artisan key:generation
  105  php artisan make:model Category
  106  php artisan make:controller CategoryController -r
  107  php artisan make:middleware AdminAuthenticate
  108  cd ..
  109  laravel new Santiago-1
  110  laravel new Santiago-
  111  laravel new ASantiago-1
  112  laravel new SAmezcua-Parcial
  113  php artisan make:controller DoctorController -r
  114  cd SAmezcua-Parcial\
  115  composer install
  116  php artisan r:l
  117  php artisan make:model Doctor
  118  php artisan make:seeder doctorSeeder
  119  php artisan migrate --seed
  120  php artisan migrate create_doctors_table
  121  php artisan make:migration create_doctors_table
  122  php artisan make migration
  123  php migrate
  124  php artisan db:seed --class=doctorSeeder
  125  php artisan migrate
  126  clear
  127   composer require laravel/ui --dev
  128  php artisan make:auth
  129  php artisan ui vue --auth
  130  php artisan make:seeder RoleSeeder
  131  php artisan make:seeder CategorySeeder
  132  php artisan make:model Role
  133  php artisan db:seed --class-RoleSeeder
  134  php artisan db:seed --class=RoleSeeder
  135  php artisan db:seed --class=CategorySeeder
  136  php artisan make:factory PostFactory
  137  php artisan make:seeder PostSeeder
  138  php artisan db:seed
  139  php artisan migrate:fresh --seed
  140  php artisan serve
  141  la
  142  ls
  143  cd implementacion


  ## Para hacer un clone
  git clone <https://github.com/amezcua04s/FCA-Proyecto-Implementacion-01.git>

  para conectar con una BD
  - En git bash
  directorio de bd
  ``./mysql -u root -p``
    - crear la base de datos


    usuarios con permisos en una base de datos, no en todo el sistema
    Se puede que el usuario solo tenga permisos para una entidad
    Se puede que el usuario tenga permisos para toda la base de datos

    ``CREATE USER 'asantiago'@'localhost' IDENTIFIED BY '<pass>'``

    ``GRANT ALL PRIVILEGES ON implementa_prod.* TO 'asantiago'@'localhost'``






APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:deWp3wA/2qE5e6yVltKEOSUh3Y5F1DgPfh2eUU41eBI=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=implementacion
DB_USERNAME=root
DB_PASSWORD=fca.00

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"



