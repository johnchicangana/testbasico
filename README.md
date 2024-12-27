## Comandos

Al descargar el proyecto deben ejecutar los siguientes comandos para que les funcione en local (teniendo en cuenta que tienen los programas necesarios)

- composer install (si les sale algun error ejecutar: composer install --ignore-platform-req=ext-sodium)
- npm install && npm run build
- php artisan key:generate

Deben crear el archivo .env con la configurarion para la DB, pueden crearlo a partir del .env.example

- php artisan migrate

Si quieren usar los datos de los seeder ejecuten el siguiente

- php artisan migrate:fresh --seed

Este comando es para limpiar la cache, es necesario en algunos casos que se esta haciendo cambios en las rutas

- php artisan route:cache

## Swagger Documentation

Para ejecutar la documentacion y actualizar los cambios de los nuevos controladores se ejecuta el siguiente comando

- php artisan l5-swagger:generate

Para poder visualizar la documentacion creada se debe ir al siguiente link, teniendo en cuenta el dominio que tengamos, si es con localhost:8000 o si tenemos algun vhost configurado

- http://DOMINIO_LOCAL/api/documentation

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
