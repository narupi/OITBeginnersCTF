#include<stdio.h>

int calc(void){
    int ans = 1;
    int i;

    for(i = 0; i < 8; i++){
        ans *= 2;
    }
    printf("debug%d\n",ans);
    return ans;

}


int main(void) {
    int flag;
    flag = calc();
    printf("Calculation finished\n");
}
