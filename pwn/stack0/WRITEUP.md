You have to change the value of the variable `modified`, which is never called.
The executable uses `gets` to get the input, which is unsecure.
By giving more than 64 characters you go over the buffer.
By doing that it is possible to change the value of modified and access the shell.
From there it is possible to do `cat flag.txt` and get the flag `slntCTF{f1rst_pwn_s0lv3d}`.
