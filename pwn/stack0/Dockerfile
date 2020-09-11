FROM disconnect3d/nsjail

RUN apt-get update && apt-get install -y build-essential gcc-multilib

COPY src/ .

RUN make

CMD nsjail -Ml --port 9000 --user 99999 --group 99999 --disable_proc --chroot / --time_limit 60 /stack0