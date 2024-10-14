#include <stdio.h>

int calculandoPotencia(int base, int expoente){
    if(expoente == 1){
        return base;
    } else{
        return base * calculandoPotencia(base, expoente - 1);
    }
}

main(){

    int base, expoente;

    scanf("%d", &base);

    scanf("%d", &expoente);

    printf("O valor da potencia: %d", calculandoPotencia(base, expoente));

}