# API RESS
- Servicios que nos permiten comunicar dos aplicaciones sin importar si son del mismo lenguaje de programación o no, utilizado para aplicaciones móviles en general

## Passport
[Laravel Passport](https://laravel.com/docs/11.x/passport#introduction) proporciona una implementación de servidor OAuth2 completa para su aplicación Laravele n cuestión de minutos, Passport se base en el servidor OAuth2
--- 
### Para crear un API
``php artisan make:controler api/PostController -r``

2. Elaborar un join que muestre los post con su categoría
3. Eliminar los métodos que no serán necesarios
> Al crear un metodo de tipo resource crearan algunos archivos que nos e utilizarán

4. Crear la ruta en el archivo routes/api.php

> Las api´s normalmente regresan un json

> No se debe señalar en el archivo api.php necesariamente, con anteponer una vista de api

- Se debe de configurar en el archivo auth que se va a utilizar passport

> -> middleware('auth:api')

### Para instalar passport a traves de composer
``php artisan install:api --passport``

