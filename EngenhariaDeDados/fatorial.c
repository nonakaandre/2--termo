#include <stdio.h>
int inteiro;
int fatorial(int Parametro1) {
    int result = 1;
    int num = Parametro1;

    for (int i = num; i > 0; i--) {
        result *= i;
    }
    return result;
}

float mediana(float num, float num2) {
  float media = (num + num2) / 2;
  return media;
}


int main() {
    int numero, numero2;
    printf("Digite um número: ");
    scanf("%d", &numero);

     printf("Digite outro número: ");
    scanf("%d", &numero2);

    /*int resulto = fatorial(numero);
    printf("%d\n", resulto);*/

    float resultado =  mediana(numero,numero2);
    printf("%f\n", resultado);

    return 0;
}