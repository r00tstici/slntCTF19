FROM disconnect3d/nsjail

RUN apt-get update && apt-get install -y build-essential gcc-multilib

RUN mkdir /task
WORKDIR /task

COPY src/ .

RUN make

CMD nsjail -Ml --port 9000 --user 99999 --group 99999 --disable_proc --chroot /task/ -R /bin/ -R /lib/ -R /lib32/ -R /lib64/ -R /libx32/ -R /usr/ -R /sbin/ --time_limit 60 /stackjmp