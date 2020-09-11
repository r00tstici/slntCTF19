#include <stdio.h>

int main(){
	char buffer[64];
	fgets(buffer, 64, stdin);

	__asm__("jmp *%esp");

	return 0;
}