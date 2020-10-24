# slntCTF19

This repository contains all the challenges from slntCTF19.

In every challenge directory you can read the description in `README.md` and the write-up (the solution) in `WRITEUP.md`.

The files contained in the `src` directories were hidden from the perticipants while `dist` contains the files distributed publicly to play.

Some challenges require an hosted service, it can be done with docker as explained below.

## Requirements

Some challenges (from pwn, web or misc categories) have a `docker-compose.yml` file in their directory, so they require `docker` and `docker-compose` to be executed.

You can follow this guide to install docker: https://docs.docker.com/get-docker/

After that you can install docker-compose: https://docs.docker.com/compose/install/

## Run challenge

If a challenge contains a `docker-compose.yml` file you must start the docker service.

Go in the challenge directory (`cd category_name/challenge_name`) and execute `docker-compose up`. After some seconds it will be up and running.

## Support

If you need help you can write to r00tstici@gmail.com
