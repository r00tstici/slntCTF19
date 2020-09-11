FROM disconnect3d/nsjail

RUN apt-get update && apt-get install -y build-essential gcc-multilib

RUN mkdir -p /challenge
WORKDIR /challenge

COPY src/ .

RUN make

CMD nsjail -Ml --port 9000 --disable_proc --time_limit 60 --chroot / --user 99999 --group 99999 -- /bin/sh -i