
# Caso Practico AT

## Description [spanish]

[ Aquí el documento técnico ](./docs/caso-practico-AT.pdf)

## Tasks

- Enviar los curls de las apis que puedas crear en Laravel
- Y de la conexion del server en tiempo real en NodeJs

### Installation by docker

1.- You must be installed **docker** and **docker-compose** in your system.

2.- Clone the repository in local env

    git clone https://github.com/tu_usuario/repositoryName.git

3.- Browser to the directory `repositoryName`

    cd repositoryName

4.- Execute the next docker command:

    docker-compose up --build

5.- Access to the container `backend-laravel`

    docker exec -i -t <container-id> /bin/sh

6.- Accede al aplicativo web desde tu navegador:

* Backend (Laravel project): http://localhost:8000
* Backend (Utility-Adminer project): http://localhost:8001
    - HOST: mysql_db
    - PORT: 3306
    - USER: root
    - PASS: root