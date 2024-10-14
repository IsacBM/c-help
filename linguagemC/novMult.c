#include <stdio.h>

void potencia(int a, int b, int *p){
    int i, aux = 1;
    for(i = 1; i < b + 1; i++){
        aux = aux * a;
    }

    *p = aux;
}

main(){
    int a, b, c;

    //c = 0;
    printf("Digite um valor:");
    scanf("%d", &a);

    scanf("%d", &b);

    potencia(a, b, &c);

    printf("%d", c);
}