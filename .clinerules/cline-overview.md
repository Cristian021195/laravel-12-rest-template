# PROYECTO: LARAVEL 12 REST TEMPLATE

Proyecto básico de Laravel 12 para usar como template de API REST de otros proyectos. Con una estructura base y arquitectura definida.


## Stack

- PHP 8.3
- Laravel 12
- MariaDB 10.3 / MySQL

## Arquitectura

- `/app`: archivos propios de laravel 7 como controladores y rutas. Funciones globales propias del proyecto
- `/app/Modelos`: sistema de modelos propios
- `/boostrap`: configuraciones de laravel
- `/config`: configuraciones de laravel
- `/database`: configuraciones de factores, seeders y migraciones. No usar.
- `/public`: carpeta public de laravel
- `/resources`: recursos javascript, traducciones, sass y vistas
- `/routes`: configuraciones de rutas de laravel, actualmente solo se usa `/routes/api.php`
- `/storage`: propio de laravel, almacenamiento de archivos locales
- `/tests`: pruebas de laravel

## Convenciones

- Usar php 7.2
- No usar migraciones de laravel porque estan incompletas
- Mantener la misma estructura del proyecto
- Solo es un proyecto de consumo de json, como un rest api
- Las respuestas deben mantener el mismo formato


## Instrucciones para Claude

- Proyecto PHP 7.2 con Laravel 7 y Mysql
- Mantener la misma estructura.
- Crearle las configuraciones para Docker `/docker`, `docker-compose.yml`, `DOCKERFILE` y `dockerignore` y demás necesarios
- El proyecto para docker debe contener el webserver con php 7.2 y un servidor propio de base de datos mysql