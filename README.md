<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel
1. Establecer esquema de base de datos y data predefinida R/Ver migraciones 
2. Crear un comando custom que me permita correr el migrate de la base de datos y cargar la
data predefinida.  
R/ la data se generada  atravez de factory comando php artisan loadData para escoger la cantidade de ciudades y clientes que desea crear.
3. Realizar CRUD para cada entidad R/Debe registrarse tener .env configurador para  el envio de emails
variables usadas en desarrollo  

APP_URL=http://localhost:3000  

MAIL_MAILER=smtp  

MAIL_HOST=smtp.gmail.com  

MAIL_PORT=587  

MAIL_USERNAME=  

MAIL_PASSWORD=   

MAIL_ENCRYPTION=tls  

MAIL_FROM_ADDRESS=miApp@Laravel.com  

MAIL_FROM_NAME="${APP_NAME}"  

QUEUE_CONNECTION=database  

DB_DATABASE=prueba  


4. Se necesita que al registrar un usuario le llegue un email de registro exitoso que le permita establecer
contraseña, usar colas y observer para el envio del correo R/ driver database usado para colas debe correr el comando php artisan queue:work antes de realizar el registro
5. Crear templates para visualizacion y registro de data. R/ ver app.blade.php
6. Utilizar paginación. R/ver contorladores de las entidades
7. Crear un filtro de clientes segun la ciudad. R/ver vista index de la entidad customer
8. Usar sesiones de usuarios (login) R/realizado
9. Usar Bootstrap R/admin paper usa boostrap
10. Subir el código en un repositorio git. R/realizado
Nota: Realizar el Proyecto utilizando POO y Laravel.
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
