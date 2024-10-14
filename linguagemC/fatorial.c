#include <stdio.h>

int fatorialRecursivo(int valor){

    int aux = 1;

    if (valor == 1){
        return 1;
    } else{
        return valor * fatorialRecursivo(valor - 1);
    }

}

void fatorialProcedimento(int valor){

    int aux, i;
    aux = 1;

    for(i = 1; i < valor+1; i++){
        aux = aux * i;
    }

    printf("Fatorial: %d\n", aux);

}

main(){
    int aux, valor, i;

    aux = 1;
    printf("Digite o valor para saber o fatorial: ");
    scanf("%d", &valor);

    for(i = 1; i < valor+1; i++){
        aux = aux * i;
    }

    printf("Fatorial: %d\n", aux);
    fatorialProcedimento(valor);
    printf("Fatorial: %d", fatorialRecursivo(valor));
}