#include <stdio.h>

int soma(int a, int b){
    return (a+b);
}

void somaProcedimento(int a, int b){
    printf("A soma de %d + %d = %d\n", a, b, a+b);
}

main(){
    int a, b;

    printf("Digite o Primeiro Valor: ");
    scanf("%d", &a);

    printf("Digite o Segundo Valor: ");
    scanf("%d", &b);

    printf("A soma de %d + %d = %d\n", a, b, a+b);
    printf("A soma de %d + %d = %d\n", a, b, soma(a,b));
    somaProcedimento(a, b);
}