# slntCTF19

The challenges are configured for ctfcli (https://github.com/CTFd/ctfcli). It can be installed with `pip3 install ctfcli`.

## Installation

### Add the challenge to CTFd

ctfcli is useful to easily upload a challenge to CTFd.

To do that you have to edit the `.ctf/config` file by adding the ctfd url after `url = ` and an admin access token after `access_token = `

After that you can add a challenge to the platform by going in a challenge directory and executing `ctf install .`

### Execute all services

The services use docker and docker-compose. To execute all services you can execute `docker-compose up` from the main directory

### Execute a single challenge

If you want to execute a single challenge you can go to the challenge's directory and execute `docker-compose up`
