
# Caso Practico AT

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