# Electro del Parque

## Pasos para ver la web:

### 1 - Instalar y configurar GIT (por única vez)
https://git-scm.com/downloads  
Dejar todo en default.  
Que use vim, el shell, el ssl que sugiere y ninguna opcion experimental.

Una vez instalado tenes que decirle a GIT quien sos, para esto ejecuta estos comandos 
en cualquier terminal :
```
git config --global user.email "correo@ejemplo.com"
git config --global user.name "Tu Nombre"
```
Tenes que poner el mismo mail y username de GitHub

### 2 - Hacer clone del repositorio (por única vez)
Dentro de la terminal, hay que ir a la carpeta __padre__ de donde quieras tener el código, ahi tenes que hacer:
```
git clone https://github.com/kolujas/electro-del-parque
```
Git crea automaticamente una carpeta con el nombre del repositorio (en este caso `electro-del-parque`) en la locación donde ejecutaste el comando.

### 3 - Instalar dependencias
Los paquetes que tiene laravel como dependencias y los que instalamos nosotros (eso que estan en la carpeta `/vendor`) no se suben al repositorio, asi que tenes que instalarlos con:
```
composer install
```
Si se quiere agregar un paquete se debe ejecutar:
```
composer require "Nombre del paquete"
```

### 4 - Setear el .env (por única vez)
Creá un archivo nuevo que se llame `.env` y pegale dentro todo el contenido de `.env.example`.

### 5 - Crear la Base de Datos (por única vez)
Para poder mostrar, subir, modificar o borrar noticias o eventos tiene que existir una base de datos, para ello dentro de tu __Gestor de Base de Datos__ tenes que crear una base llamada `electro`. Tambien se tiene que ejecutar las migraciones y seeders que va a necesitar para funcionar, con:
```
php artisan migrate --seed
```

### 6 - Crear al Symlink de la carpeta Storage (por única vez)
Para poder mostrar, subir, cambiar o borrar imagenes, cualquiera que entre a la web tiene que tener acceso a la carpeta `/vendor`, pero como esta fuera de la carpeta `/public` no lo tiene permitido. Para ello tenes que crear un acceso directo a la carpeta con este comando:
```
php artisan storage:link
```