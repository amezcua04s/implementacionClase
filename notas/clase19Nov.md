# Seeders
Laravel incorpora los seeders para poder insertar datos ficticios, esto permite realizar las pruebas con datos sin necesidad de agregarlos manualmente.

- Estos se almacenan en el directorio *database/seeders

``php artisan make:seeders <Tbl>Seeder``

- Cuando se esta en desarrollo se puede usar

``php artisan migrate:refresh seed``

- Cuando ya esta en producción se recomiendo hacer de uno por uno

``php artisan db:seed --class=RoleSeeder``

``php artisan db:seed --class=CategorySeeder``