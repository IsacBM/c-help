# c-help
> Aprendizagem...

*******
**Sumário do Conteúdo Abordado:**
 1. **[Tabela de Operadores: Lógicos e Aritméticos](#tabela)**
 2. **[Corpo de Inicialização: (Estrutura Básica)](#inicio)**
 3. **[Variáveis: `int`, `float`, `char(String)`...](#variaveis)**
 5. **[Estruturas Condicionais: `if`, `else if` e `else`](#condicionais)**
 6. **[Estruturas de Repetição: `for`, `while` e `do while`](#repeticao)**
 7. **[Agrupamento de Valores: `Lista` e `Vetores`](#listas)**

*******
<div id="tabela"></div>

## Tabelas de Operadores:

#### Operadores Aritméticos:

| Operadores | Nome | Descrição | Exemplo |
| :---: | :---: | --- | :---: |
| + |  Adição | texto exemplo |
| - |  Subtração | texto exemplo |
| * | Multiplicação | texto exemplo |
| / | Divisão | texto exemplo |
| % | Módulo | texto exemplo |

#### Operadores Relacionais:

* Esses operadores são usados para comparar valores.

| Operadores | Nome | Descrição | Exemplo |
| :---: | :---: | --- | :---: |
| == | Igualdade | texto exemplo |
| != | 	Diferença | texto exemplo |
| > | Maior que | texto exemplo |
| < | Menor que | texto exemplo |
| >= | Maior ou igual | texto exemplo |
| <= | Menor ou igual | texto exemplo |

#### Operadores Lógicos:

| Operadores | Nome | Descrição | Exemplo |
| :---: | :---: | --- | :---: |
| && | Entenda como `e` | Faz uma "junção" entre comparações. | `a && b == 2` |
| \|\| | Entenda como `ou` | Uma das expressões tem que ser verdadeiras(`true`). | `a == 1 \|\| a == 9 ` |
| ! | Negação/Inversão | Inverte o valor lógico do item(`true` vira `false` e vice-versa). | `!a` |

<hr>

<div id="inicio"></div>

# Corpo de Inicialização: (Estrutura Básica)


```c
#include <stdio.h>

int main() {

    return 0;
}
```

* <b>Primeiro:</b> `#include <stdio.h>`, ela é uma biblioteca de arquivos de cabeçalho que permite trabalhar com funções de entrada e saída(Traduzindo: Receber e mostrar informações para o usuário). Por exemplo: `printf()` e o `scanf()`.
* <b>Segundo:</b> `int main()`, ela é uma função que sempre será chamada primeiro, independente de quantas funções tenha antes. Qualquer código que esteja dentro de suas chaves `{}` será executado(assim como qualquer outra função).

---

<div id="variaveis"></div>

# Variáveis: int, float e char(String)

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

# Funções de Entrada e Saída: (Principais)

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

## Desafio da Parte 1:

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

    int A = 5, B = 5;
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

    int A = 5, B = 5;
    int X = A + B;
    printf("X = %d", X);

    return 0;
}
```

</details>

<hr>

<div id="condicionais"></div>

# Estruturas Condicionais: `if`, `else if` e `else`...
* 1 - Estruturas condicionais são utilizadas para tomar decisões no código, executando diferentes blocos de comandos dependendo de uma condição específica.

* 2 - Temos três principais formas de utilizá-las:
  * `if`: Executa um bloco de código se a condição for verdadeira.
  * `else if`: Adiciona uma segunda opção, caso a primeira condição seja falsa.
  * `else`: Define um bloco de código a ser executado quando nenhuma das condições anteriores for atendida.
 
### Entendendo as Estruturas:

```c
#include <stdio.h>

int main(){

    if (Condição) // Se a condição for verdadeira o código dentro dele é executado...
    {
        /* Código */
    }
    else if(Condição) // Caso o primeiro if não seja verdadeiro, ele faz outra verificação...
    {
        /* Código */
    } 
    else // Se nenhuma das condições acima forem verdadeiras executará o código dentro dele...
    { 
        /* Código */
    }
    

    return 1;
}

```

### Exemplo de Uso:

```c
#include <stdio.h>

int main() {
    int idade;
    printf("Digite sua idade: ");
    scanf("%d", &idade);
    
    if (idade >= 18) {
        printf("Você é maior de idade.\n");
    } else if (idade >= 12) {
        printf("Você é adolescente.\n");
    } else {
        printf("Você é criança.\n");
    }
    
    return 0;
}
```

<hr>

<div id="repeticao"></div>

# Estruturas de Repetição: `For` e `While`...

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

```c
#include <stdio.h>

int main(){

    while (Condição)
    {
        /* Código */
    }
    
    return 0;
}
```

* Diferentemente do `for`, a estrutura while utiliza apenas uma condição de forma direta, não permitindo criar uma variável interna dentro da sintaxe, ou seja, ela é algo mais simplificado do que o `for` nesse sentido porque ela precisa apenas de uma condição e se ela for verdadeira o código dentro dela será executado até se tornar falso.

### Exemplo de Uso: Enquanto `a` for diferente de `0`...

```c
#include <stdio.h>

int main(){

    int a = 2;

    while (a != 0)
    {
        printf("Digite um valor: \n");
        scanf("%d", &a);
        printf("Tô no laço... :)\n");
    }
    
    return 0;
}
```
1 - Variável Externa: `int a = 2`
* Aqui, a variável `a` é criada fora e antes do laço e recebe o valor inicial `2`. Ela pode ser de outros tipos (`float`, `char`, etc.), dependendo da necessidade do código.

2- Condição: `a != 0`
* Enquanto essa condição for verdadeira, o loop continuará executando. No caso, o bloco de código será repetido enquanto `a` for diferente de `0`.

3 - Resultado: `printf("Tô no laço... :)\n");`...

* Enquanto o valor digitado pelo usuário for diferente de `0`(Zero), o laço será repetido, caso o valor digitado seja igual(`==`) a `0`(Zero) o laço se tornará falso e sairá do Loop dando continuidade ao restante do código abaixo do laço.

<hr>

<div id="listas"></div>

# Agrupamento de Valores: `Listas` e `Arrays`...
