#include <stdio.h>

int fatorial(int num) {
    int result = 1;

    for (int i = num; i > 0; i--) {
        result *= i;
    }

    return result;
}

int main() {
    int numero;
    printf("Digite um número: ");
    scanf("%d", &numero);
    printf("Fatorial de %d = %d\n", numero, fatorial(numero));
    return 0;
}