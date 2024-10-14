#include <stdio.h>

int multiplicacao(int a, int b){
    if(b == 0){
        return b;
    } else{
        return a + multiplicacao(a, b - 1);
    }
}

main(){

    int a, b;

    scanf("%d", &a);

    scanf("%d", &b);

    printf("A multiplicação é: %d", multiplicacao(a,b));
}