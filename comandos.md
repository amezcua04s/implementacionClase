# Comandos realizados en la clase
## Clase del 10 de octubre del 2024
### Para crear una validación basados en [Validation](https://laravel.com/docs/11.x/validation#rule-in)

``` php artisan make:request StorePostRequest ```

- Para recargas las migraciones de la base de datos
  
```php artisan migrate:fresh```

### Para conectar con la base de datos
 - Crear una nueva base de datos y correr el comando

 ```php artisan migrate```

 ## Clase 29/Octubre/2024
 ### Para trabajar con la tabla de category
 - Modelo de category

 ```php artisan make:model Category```

 - Controlador de category (NO ES NECESARIO (todavía), pero se hizo)

```php artisan make:controller Category```

## Clase 12/Noviembre/2024
### Para hacer los middleware
- Crear un middleware AdminAuthenticate

``php artisan make:middleware AdminAuthenticate``


## Clase 19/Noviembre/2024
### Para crear seeder
- Seeder de rol

``php artisan make:seeder RoleSeeder``

- Seeder de categorias

``php artisan make:seeder CategorySeeder``

- Crear el modelo para los roles

``php artisan make:model Role``

- Para volver a ejecutar todos los seeders

``php artisan migrate:fresh --seed``

>Para correr todos los seeders que esten señalados en el archivo DatabaseSeeder

``php artisan db:seed``