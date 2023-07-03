# Instalación rápida

1. Clonar el repositorio de git.
```
git clone https://github.com/registracker/docker-registracker.git
```
2. Crear el archivo `.env` copiando y ajustando el `.env.example`.
```
cp .env.example .env
```
3. Run `docker compose up -d`.
4. Acceda a la interfaz de usuario web en `http://localhost:80` (o un puerto diferente, en caso de que haya editado el archivo .env)


# Configuración
La configuración se realiza mediante variables de entorno contenidas en un fichero .env. Puede copiar el archivo env.example proporcionado como referencia.
<style>
table th:first-of-type {
    width: 20%;
}
table th:nth-of-type(2) {
    width: 60%;
}
table th:nth-of-type(3) {
    width: 20%;
}
</style>

| Variable | Descripción | Ejemplo |
|:---|:---|:---|
| `SERVER_PROTOCOL` | Protocolo que utilizará al levantar los servicios, por defecto se utilizará el `http`, si cuenta con los certificados deberá cambiar este valor a `https`. | http |
| `ADMIN_NAME` | Identificador del administrador. | developer |
| `ADMIN_EMAIL` | Correo del administrador utilizado al ejecutar el seeder de la base de datos. | developer@gmail.com |
| `ADMIN_PASSWORD` | COntraseña por defecto del administrador al ejecutar el seeder. | password1234 |
| `ADMIN_NAME` |  |  |


## Utilización del certificado y la clave TLS existentes
1. Verificar que la variable de entorno del archivo `.env` se encuentre en `https`.
```
SERVER_PROTOCOL=https
```
2. Se debe especificar al servicio web de Registracker que monte los siguientes dos volúmenes:
- Montar `/ruta/del/cert.key` al archivo `/etc/certs/bundle.crt` del punto de montaje.
- Montar `/ruta/del/cert.fullchain` al archivo `/etc/certs/private.key` del punto de montaje.
```
services:
    proxy:
        image: nginx:latest
        ports:
            ...
        volumes:
            ...
            - ./docker/certs/bundle.crt:/etc/certs/bundle.crt
            - ./docker/certs/private.key:/etc/certs/private.key
```

docker compose exec php composer install
docker compose exec php php artisan orion:specs --path="public/specs/specs.json"
sudo chmod -R 777 storage/app/public/
docker compose exec php php artisan migrate:fresh --seed
docker compose exec php php artisan make:migration create_flights_table
AppServiceProvider
docker run -v "$(pwd)/:/app" --workdir /app node:16-alpine npm run build
