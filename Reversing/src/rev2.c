#include<stdio.h>
#include<string.h>


void set_flag(char flag[]){
    flag[0] = 'o';
    flag[1] = 'i';
    flag[2] = 't';
    flag[3] = 'c';
    flag[4] = 't';
    flag[5] = 'f';
    flag[6] = '{';
    flag[7] = 'd';
    flag[8] = '1';
    flag[9] = 'f';
    flag[10] = 'f';
    flag[11] = '1';
    flag[12] = 'c';
    flag[13] = 'u';
    flag[14] = 'l';
    flag[15] = 't';
    flag[16] = '?';
    flag[17] = '}';

    return ;
}

int main(int argc, char *argv[] ) {
    printf("Can you analyze me?\n");
    char flag[64];

    set_flag(flag);

    if (argc != 3) {
        printf("Never give up!\n");
    }
    else {
        if(strcmp(argv[1],"oit") == 0) {
            if(strcmp(argv[2], "ctf") == 0) {
                printf("Good job!\n");
                printf("Flag is :%s\n", flag);
            }
            else {
                printf("So close.\n");
            }

        }
        else {
            printf("Analyze a little more.\n");
        }

    }

    return 0;


}
