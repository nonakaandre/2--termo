#include <stdio.h>

int main() { 
    int ini, fim, inter= 0;
    int menor = 0, maior = 0, soma =0;
    printf("Vamos procurar alguns números interessantes dentro de um intervalo de números?\n");
    printf("A partir de que número vamos iniciar? ");
    scanf("%d", &ini);
    printf("Digite o segundo número: ");
    scanf("%d", &fim);
   
    for (int i=ini; i<=fim; i++) {
        if((i % 3 == 0 || i % 5 == 0) && i % 2 != 0){
            
        if(inter == 0){
            menor = i;
        }
        maior = i;
        inter++;
        soma += i;
    }
    }
    printf("O primeiro número é: %d\n", menor);
    printf("O último número é: %d\n", maior);
    printf("O total de número interessantes é: %d\n", inter);
    printf("a soma dos números é: %d\n", soma);
    return 0;
}

/*Leia dois números inteiros (inicio e fim).
Percorra todos os números do intervalo.
Considere como número interessante aquele que:
é divisível por 3 OU por 5,
E
não é divisível por 2 (ou seja, é ímpar)
Ao final, o programa deve apresentar:
o primeiro número interessante encontrado;
o último número interessante encontrado;
a quantidade de números interessantes;
a soma desses números.*/