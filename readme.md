<p align="center"></p>

# Twitter &nbsp;
Práctica realizada en laravel con las funcionalidades principales de twitter. Los seeders proporcionan usuarios e interacciones entre ellos aleatorias, de forma que se pueda comprobar el funcionamiento de las funcionalidades implementadas.

## Guía de instalación

Siga estas instrucciones para obtener una copia de este proyecto funcionando correctamente en tu sistema operativo.

### Prerrequisitos 
Para poder utilizar este proyecto es necesario tener instaladas ciertas herramientas, como son composer y php.

Con estas herramientas son necesarios ejecutar ciertos comandos con el fin de llenar de ejemplos el programa y lanzar un servidor para su ejecución.

> *Ejecutar estos comandos en la carpeta del proyecto.
```
$ composer update
$ touch database/database.sqlite
$ cp .env.example .env
```
> *Modificar el archivo *.env*. Poner la conexión de la base de datos a: *DB_CONNECTION=sqlite*.

```
$ php artisan migrate --seed
$ php artisan key:generate
```

### Instalando y ejecutando Gintónico

Para compilar el proyecto Gintónico necesitamos ejecutar el comando:
> *Ejecutar este comando para lanzar la aplicación*.
```
$ php artisan serve
```

Una vez lanzado se puede acceder a través del navegador con la siguiente dirección

> Windows:   ``` http://127.0.0.1:8000>```

A continuación se muestran algunos ejemplos del programa.

Inicio, escribir Tweet:
<p align="center"><img src="t1.gif" width="450"></img></p>
Seguir usuarios recomendados:
<p align="center"><img src="t2.gif" width="450"></img></p>
Seguidos, seguidores, likes:
<p align="center"><img src="t4.gif" width="450"></img></p>
Listas:
<p align="center"><img src="t5.gif" width="450"></img></p>

## Licencia

Este proyecto está bajo la licencia GNU GPL v3 - revisa [LICENSE](LICENSE) para ver más detalles.
