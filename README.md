# c-help
> Aprendizagem...

## Corpo de Inicialização: (Estrutura Básica)


```c
#include <stdio.h>

main() {
    
}
```

* <b>Primeiro:</b> `#include <stdio.h>`, ela é uma biblioteca de arquivos de cabeçalho que permite trabalhar com funções de entrada e saída. Por exemplo: `printf()` e o `scanf()`.
* <b>Segundo:</b> `main()`, ela é uma função que sempre será chamada primeiro, independente de quantas funções tenha antes. Qualquer código que esteja dentro de suas chaves `{}` será executado(assim como qualquer outra função).

---

## Variáveis: int, float e char(String)

```c
#include <stdio.h>

main() {

    int num = 7;
    float ponto = 7.7;
    char caracter = "i";
    char cadeiaDeCaracter[] = "Isac";
    
}
```
* <b>Valores Inteiros:</b> São representados pelo termo `int`. Exemplos: `7`,`8`,`9` e `10`.
* <b>Valores Ponto Flutuante:</b> São representados pelo termo `float`. Exemplos: `7.7`,`8.7`,`9.7` e `10.7`.
* <b>Valores Caracter:</b> São representados pelo termo `char`. Exemplos: `i`,`s`,`a` e `c`.
* <b>Cadeia de Caracteres:</b> São representados pelo termo `char` acompanhado pelo nome da variável e em seguida, por `[]`. assim você poderá guardar mais de um valor dentro `char`(mesma ideia de um vetor), visto que não possui o "tipo" String nativamente na linguagem C. Exemplos: `Isac`,`Kass`,`B.M` e `Qualquer outro nome`.

### Variaveis Multiplas:

Elas podem ser declaradas/criadas sem precisar de um valor especifico, podendo estar na mesma tipagem. Por Exemplo:

```c
#include <stdio.h>

main() {

    int num1, num2;
    char a, nome[20];
    float nota1, nota2;
}
```

* <b>OBS:</b> Todos esses valores foram criados, mas não possuem nenhum valor atribuido a eles.
---

## Funções de Entrada e Saída: (Principais)

### Função `printf()`:

### Código:
```c
#include <stdio.h>

main() {

  printf("Olá Sr(a) User, seja muito bem-vindo!");

}
```

* O `printf()` é utilizado para imprimir/mostrar algo na tela.
* <b>OBS</b> Fique atento(a) as aspas duplas(`"`) e ao ponto e vírgula(`;`).

### Saída do Código:
```powershell
Olá Sr(a) User, seja muito bem-vindo!
```

### Função `scanf()`:

### Código:
```c
#include <stdio.h>

main() {

  int idade;

  scanf("%d", &idade);

}
```

* O `scanf()` é utilizado para receber um valor do usuário.
* Primeiro define-se uma variavel que receberá esse valor, nesse exemplo, `idade`.
* O `"%d"` é a definição do tipo de valor que será recebido(inteiro, caracter ou ponto flutuante).
* O `&` é para armazenar a informação recebida no endereço de memória criado(Será o endereço da variavel passada, nesse caso, `idade`).
* * <b>OBS</b> Fique atento(a) as aspas duplas(`"`) e ao ponto e vírgula(`;`).

## Desafio da Parte 1:

* Leia 2 valores inteiros e armazene-os nas variáveis A e B. Efetue a soma de A e B atribuindo o seu resultado na variável X. Imprima X conforme exemplo apresentado abaixo. Não apresente mensagem alguma além daquilo que está sendo especificado e não esqueça de imprimir o fim de linha após o resultado

Exemplo de Entrada:
```
15
-7
```
Exemplo de Saída:
```
X = 8
```
