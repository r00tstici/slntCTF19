#include <stdio.h>
#include <stdlib.h>

int main(int argc, char **argv){
  volatile int modified;
  char buffer[64];

  modified = 0;
  gets(buffer);

  if(modified != 0) {
    puts("You got a shell!"); 
    system("/bin/sh");
  } else {
    printf("Try again?\n");
  }
}