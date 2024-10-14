#include <stdio.h>

void soma(int a, int b, int *p){
    *p = a + b;
}

void fatorial(int fator, int *result){

    int aux = 1, i;

    for(i = 1; i <= fator; i++){
        aux = aux * i;
    }

    *result = aux;
}

void mult(int a, int b, int *p){
    *p = a * b;
}

main(){
    int a, b, r, *p;

    p = &r;

    printf("Digite um valor: ");
    scanf("%d", &a);

    printf("Digite mais um valor: ");
    scanf("%d", &b);


    soma(a, b, p);

    printf("Soma: %d\n", *p);

    fatorial(5, &r);

    printf("Fatorial: %d\n", r);

    mult(a, b, &r);

    printf("Multiplicacao: %d", r);

    // a = 8;
    // p = &a;

    // printf("%d \n", a);

    // *p = *p + 1;

    // printf("%d\n", *p);
}