int fibonacciRecursivo(int n) {
    if (n == 0) {
        return 0;
    }
    if (n == 1) {
        return 1;
    }
    return fibonacciRecursivo(n - 1) + fibonacciRecursivo(n - 2);
}

main(){
    printf("Valor: %d", fibonacciRecursivo(6));
}