FROM disconnect3d/nsjail

COPY src/ .

CMD nsjail -Ml --port 9000 --disable_proc --time_limit 60 --chroot / --user 99999 --group 99999 -- /bin/sh -i