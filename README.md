# Curso Laravel

Este repositorio es parte de un curso de Laravel 9, donde también se aplican conceptos de Docker. La idea principal es levantar localmente el proyecto Laravel y empaquetar este proyecto en un contenedor personalizado para que pueda comunicarse con una base de datos alojada en un contenedor creado a partir de una imagen pública de MariaDB.

## Requisitos

Después de clonar el repositorio, asegúrate de tener instalado Docker y Docker Compose.

## Pasos

1. Crea un archivo `.env` y copia los datos de `.env.example`.
2. buildear front localmente con npm, para que luego el build pueda encontrar el package-lock.json:
    ```bash
    npm install
    ```
3. Construye las imágenes con el siguiente comando:
    ```bash
    docker-compose build
    ```
4. Levanta los contenedores en segundo plano:
    ```bash
    docker-compose up -d
    ```

Al levantar los contenedores, la aplicación servida por Apache estará escuchando en localhost, puerto 80.

- Si no se visualiza la página de inicio de inmediato, verifica que las dependencias de Composer se hayan instalado. Si no, ejecuta dentro del contenedor de la aplicación:
    abre un bash en el contenedor: docker exec -it curso-laravel-app-1 bash

    ```bash
    composer install
    ```

- Si aún no puedes acceder, verifica los permisos en `/storage` y `/bootstrap`. Asegúrate de otorgar permisos a `storage/logs`.

- Dentro del contenedor, también ejecuta:
    ```bash
    php artisan key:generate
    ```
  Esto generará una clave de cifrado que Laravel utiliza para proteger información cifrada y la colocará automáticamente en tu archivo `.env`.

5. Correr migraciones: (dentro del conteiner de la app)
    ```bash
    php artisan migrate
    ```
    si se quiere crear data fake con factory ejecutar con el comando:

    ```bash
    php artisan migrate:refresh --seed
    ```