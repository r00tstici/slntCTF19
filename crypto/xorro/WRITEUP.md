The strings are in hex and the cipher is xor, as suggested by the challenge's name.
By xoring `The Mask of Xorro` with `11 04 21 74 28 03 39 3b 67 3e 23 4c 1c 3b 17 10 25` it is possible to get back the key.
The result is `ElDTebJPGQElDTebJ` which is the repetition of `ElDTebJPGQ`, the secret encryption key.
Finally by xoring `36 00 2a 20 26 36 0c 2b 0a 65 3c 0e 77 0b 3f 52 38 22 77 2c` with `ElDTebJPGQ` we get `slntCTF{M4yb3_Z0rr0}`, the flag.
