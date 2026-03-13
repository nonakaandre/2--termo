#include <stdio.h>

int main() {
    float media,soma = 0, v[10];
    int i;
    for( i=0; i<10;) {
        printf("Digite o nº %d inteiro: ", i + 1);
        scanf("%f", &v[i]);
        soma += v[i];
        i++;
    }
    media = soma / 10;
    printf("Soma de todos números é %.2f\n", soma);
    printf("E a média é %.2f\n", media);
    return 0;
}