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
