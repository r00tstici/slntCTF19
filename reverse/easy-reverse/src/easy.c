#include <stdio.h>
#include <stdlib.h>

//slntCTF{3z_r3vers3_r1ghT?}

int main(int argc, char** argv){

  if (argc < 2){
    printf("Syntax: %s flag\n", argv[0]);
    exit(1);
  }

  if(argv[1][0] == 's')
    if(argv[1][1] == 'l')
      if(argv[1][2] == 'n') 
        if(argv[1][3] == 't')
	        if(argv[1][4] == 'C')
            if(argv[1][5] == 'T')
	            if(argv[1][6] == 'F')
	              if(argv[1][7] == '{')
		              if(argv[1][8] == '3')
                    if(argv[1][9] == 'z')
		                  if(argv[1][10] == '_')
		                    if(argv[1][11] == 'r')
			                    if(argv[1][12] == '3')
		                        if(argv[1][13] == 'v')
		                          if(argv[1][14] == 'e')
                                if(argv[1][15] == 'r')
                                  if(argv[1][16] == 's')
                                    if(argv[1][17] == '3')
                                      if(argv[1][18] == '_')
                                        if(argv[1][19] == 'r')
                                          if(argv[1][20] == '1')
                                            if(argv[1][21] == 'g')
                                              if(argv[1][22] == 'h')
                                                if(argv[1][23] == 'T')
                                                  if(argv[1][24] == '?')
                                                    if(argv[1][25] == '}'){
                                                      puts("Well done");
                                                      return 0;
                                                    }

  puts("Try again");

  return 0;
}