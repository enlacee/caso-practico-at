
# Caso Practico AT

## Description [spanish]

[ Aquí el documento técnico ](./docs/caso-practico-AT.pdf)

## Tasks

- Enviar los curls de las apis que puedas crear en Laravel
- Y de la conexion del server en tiempo real en NodeJs

### Installation by docker

1.- You must be installed **docker** and **docker-compose** in your system.

2.- Clone the repository in local env

    git clone git@github.com:enlacee/caso-practico-at.git

3.- Move to `caso-practico-at` folder

    cd caso-practico-at

4.- Execute the next docker command: for building the containers

    docker-compose up --build

5.- Access to the container `backend-laravel`

    docker exec -i -t <container-id> /bin/sh

6.- Accede al aplicativo web desde tu navegador:

* Backend-Laravel: http://localhost:8000
    * Utility-Adminer: http://localhost:8001
        - HOST: mysql_db
        - PORT: 3306
        - USER: root
        - PASS: root
* Backend-Node: http://localhost:3000



// crear las tablas
php artisan migrate

// llena las tablas de data
php artisan migrate --seed


### Usefull commands

create seeders

    php artisan make:seeder PlayerSeeder