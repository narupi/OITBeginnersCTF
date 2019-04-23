#include<stdio.h>
#include<string.h>

int main(void){

    char buffer[128];
    size_t length;

    printf("Authentication required\n");
    printf("Who are you?\n");

    if (fgets(buffer, 128, stdin) == NULL) {
        return 1;
    }

    length = strlen(buffer);
    if (length > 0 && buffer[length - 1] == '\n') {
        buffer[--length] = '\0';
    }

    if ( strcmp( buffer, "adm!n!strat0r" ) == 0 ){
        printf("Authentication complete!\n");
        printf("Flag is : oitctf{easy_b1nary!}\n");
    }
    else {
        printf("Authentication failed\n");
    }
        
    return 0;
}

