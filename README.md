
# Caso Practico AT

## Description [spanish]

La empresa Apuesta Total tiene clientes cada vez más exigentes, por tal motivo requieren
establecer más canales de atención para realizar las apuestas deportivas.
Se necesita una solución que permita tener el registro de todas las transacciones.
Los clientes deben tener un billetero(saldo), el cual sube con el registro de depósitos, para
el que envían dos tipos de información, su Número de Documento y el voucher de depósito,
dicho voucher contempla el monto, así como el banco sobre el cual depositaron.
Un promotor atiende al cliente por algún canal de comunicación (WhatsApp o Telegram), es
importante identificar el medio por el cual se realizó la atención, ya que ese dato es un
indicador importante para el análisis de información.
También debe existir un perfil “validador”, el cual se encarga de verificar estos depósitos con
las aplicaciones bancarias, por ello solo cuando este validador apruebe un depósito, debe
sumarse automáticamente el billetero del cliente con el monto depositado.
La solución debe permitir ver las transacciones realizadas para cada cliente, además de
información de los promotores y validadores que atendieron dichas transacciones.

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