#include <stdio.h>>

void categoria(int idade, char *categori){
    if(idade > 5 && idade <= 7){
        strcpy(categori, "Infantil A");
    }
}

main(){
    int idade;
    char categori[20];

    //strcpy(categori, "sddddddddddd")
    idade = 7;
    categoria(idade, categori);

    printf("%s", categori);
}