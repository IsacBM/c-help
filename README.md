# c-help
> Aprendizagem...

*******
Tabelas de conteúdo 
 1. **[Tabela de Operadores: Lógicos e Aritméticos](#tabela)**
 2. **[Porque usar Markdown?](#why)**
 3. **[Ferramentas para Markdown](#tools)**
 4. **[Estruturas Condicionais: `if`, `else if` e `else`](#condicionais)**

*******
<div id="tabela">
## Tabela de Operadores:

| Operadores | Descrição |
| --- | --- |
| git status | List all new or modified files |
| git diff | Show file differences that haven't been staged |

</div>

## Corpo de Inicialização: (Estrutura Básica)


```c
#include <stdio.h>

int main() {

    return 0;
}
```

* <b>Primeiro:</b> `#include <stdio.h>`, ela é uma biblioteca de arquivos de cabeçalho que permite trabalhar com funções de entrada e saída. Por exemplo: `printf()` e o `scanf()`.
* <b>Segundo:</b> `int main()`, ela é uma função que sempre será chamada primeiro, independente de quantas funções tenha antes. Qualquer código que esteja dentro de suas chaves `{}` será executado(assim como qualquer outra função).

---

## Variáveis: int, float e char(String)

```c
#include <stdio.h>

int main() {

    int num = 7; // Valores Inteiros
    float ponto = 7.7; // Valores "Quebrados"
    char caracter = "i"; // Caractere
    char cadeiaDeCaracter[] = "Isac"; // Sequência de Caracteres(Lista)

    return 0;
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

int main() {

    int num1, num2;
    char a, nome[20];
    float nota1, nota2;

    return 0;
}
```

* <b>OBS:</b> Todos esses valores foram criados, mas não possuem nenhum valor atribuido a eles, sendo assim possivél atribuir futuramente ao decorrer do código.
---

## Funções de Entrada e Saída: (Principais)

### Função `printf()`:

### Código:
```c
#include <stdio.h>

int main() {

    printf("Olá Sr(a) User, seja muito bem-vindo!");
    return 0;
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

int main() {

    int idade;

    scanf("%d", &idade);

    return 0;
}
```

* O `scanf()` é utilizado para receber um valor do usuário.
* Primeiro define-se uma variavel que receberá esse valor, nesse exemplo, `idade`.
* O `"%d"` é a definição do tipo de valor que será recebido(inteiro, caracter ou ponto flutuante).
* O `&` é para armazenar a informação recebida no endereço de memória criado(Será o endereço da variavel passada, nesse caso, `idade`).
* * <b>OBS</b> Fique atento(a) as aspas duplas(`"`) e ao ponto e vírgula(`;`).

# Desafio da Parte 1:

* Leia 2 valores inteiros e armazene-os nas variáveis A e B. Efetue a soma de A e B atribuindo o seu resultado na variável X. Imprima X conforme exemplo apresentado abaixo.
* **`Sugestão`**: Tente fazer sem precisar criar uma função e tente também criando uma função :)

Exemplo de Entrada:
```
15
-7
```
Exemplo de Saída:
```
X = 8
```

<details>
<summary>Veja Aqui um Exemplo Passo a Passo:</summary>

<br>

* 1 - **`Enunciado`**: "Leia 2 valores inteiros e armazene-os nas variáveis A e B...", ou seja, crie duas variáveis do tipo inteiro(int) para armazenar valores que serão enviados pelo usuário.
```c
#include <stdio.h>

int main(){

    int A, B;
```
* 2 - **`Enunciado`**: "[..]Efetue a soma de A e B...", já temos duas variáveis criadas anteriormente que armazena valores, aqui criaremos uma terceira para armazenar a soma.

```c
    int X = A + B;
```

* 3 - **`Enunciado`**: "Imprima X ...", Agora utilizaremos o `printf` para mostrar o resultado no terminal.
```c
    printf("X = %d", X);

    return 0;
}
```
* Código Completo:
```c
#include <stdio.h>

int main(){

    int A, B;
    int X = A + B;
    printf("X = %d", X);

    return 0;
}
```

</details>

<hr>
<div id="condicionais">
## Estruturas Condicionais: `if`, `else if` e `else`...

// Parte do IF
</div>
## Estruturas de Repetição: `For` e `While`...

* 1 - Estruturas de repetição, como o próprio nome já diz, se diz respeito a repetir algo, nesse caso seria repetir uma determinada parte do código quantas vezes for necessária, até finaliza-lá por uma condição ou por uma "quebra" em determinado ponto(`break`).
* 2 - Temos dois tipos principais, estruturas que utilizam uma condição de parada(parecido com o `if`) e outros que são "infinitos", até que algo a encerre(`break`).

### Entendendo a Estrutura `For`:

```c
#include <stdio.h>

int main(){

    for (Variável Auxiliar; Condição; Atualização da variável Auxiliar){
        // conteúdo a ser repetido...
    }
    return 0;
}
```
* A estrutra `for` utiliza os seguintes pontos: Uma variável auxiliar, chamada também de contador que ajuda na contagem de repetições; Uma condição/verificação que controlará o laço; e um incrementador, algo que atualiza o valor da variável auxiliar a cada repetição.

### Exemplo de Uso: Contador do 1 ao 5...

```c
#include <stdio.h>

int main(){

    for (int i = 1; i < 6; i++){
        printf("%d\n", i);
    }
    return 0;
}
```

1 - Variável Auxiliar: `int i = 1`
* Aqui, a variável `i` é criada e recebe o valor inicial `1`. Ela pode ser de outros tipos (`float`, `char`, etc.), dependendo da necessidade do código.

2- Condição: `i < 6`
* Enquanto essa condição for verdadeira, o loop continuará executando. No caso, o bloco de código será repetido enquanto `i` for menor que `i`.

3 - Atualização/Incremento: `i++`...

* Esse operador incrementa `i` em `1` a cada repetição do loop.
    Exemplo de execução:
    * 1ª repetição: `i = 1`, imprime `1`, depois `i` se torna `2`.
    * 2ª repetição: `i = 2`, imprime `2`, depois `i` se torna `3`.
    * E assim por diante, até `i = 6`, quando a condição `i < 6` se torna falsa e o loop para.

### Entendendo a Estrutura `While`:
