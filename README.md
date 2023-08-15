<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.laramind.com%2Fblog%2Fwp-content%2Fuploads%2F2017%2F02%2Fscandaliitaliani-12.png&f=1&nofb=1&ipt=d2a326a3dd619473f4802727341cc5e22806bacf4d7ad7a64ed4b9041b6b23ea&ipo=images" width="400"></a></p>

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen es un micro-framework PHP increíblemente rápido para construir aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo debe ser una experiencia agradable y creativa para ser realmente satisfactorio. Lumen intenta eliminar el dolor del desarrollo facilitando las tareas comunes utilizadas en la mayoría de los proyectos web, tales como enrutamiento, abstracción de bases de datos, colas y almacenamiento en caché.

# CRUD API que permite la gestión de libros

Nos va a permitir agregar, modificar, ver y eliminar la información donde se adjunto las imágenes de dichos libros. Esto se utilizará con Postman de forma sencilla para hacer el consumo de informa

### Documentación oficial

La documentación del framework puede encontrarse en el [sitio web de Lumen](https://lumen.laravel.com/docs).


### Herramientas que se utilizaron en su respectivo orden, así:
- Laravel 8
- Lumen
- compouser
- Base de datos MySQL (administracion.sql)
Este archivo se encuentra en la carpeta en `ctrlUsuarios\database\biblioteca.sql`

#### ¿Cómo Descargar el CrudApi?

- En el botón que se encuentra en la parte superior derecha del proyecto que dice `<>code` tendrá las opciones para clonar el repositorio o descargar los archivos del proyecto en formato `.zip`

- Una vez tenga los archivos en su equipo los podrá llevar al servidor local de su preferencia como es *Xampp, Wampserver*

- Cuando ya tenga la ubicación deberá ir a la carpeta del proyecto para ubicar la base de datos que esta en `crudApi\database\biblioteca.sql`.

- Cree en MySQL una BD llamada administración, una vez la tenga vaya a la opción de `importar` dentro de esta base de datos seleccione la opción `examinar` ahí tendrá que elegir la ubicación del archivo `.sql` que anteriormente nombre.

- Ahora que tiene el acceso vaya a su navegador preferido. Ejemplo: `localhost/crudApi/public o index.php, index.html`; esto ya dependerá en donde creó el proyecto. En este caso es: `localhost/crudApi/public/libros` nos muestra en formato json la información.

------------

#### Contenido
- CRUD
- Creación de libros

> Nota: Espero que con esto sea de su agrado para que pueda identificar como funciona y que puede implementarlo para otros proyectos personales o para empresa.
