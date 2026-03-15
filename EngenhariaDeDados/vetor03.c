#include <stdio.h>

void lerNumero(int num, int v[]) {
    for(int i = 0; i < num; i++) {
        printf("Digite o nº%d valor: ", i+1);
        scanf("%d", &v[i]);
    }
}

void mostrarNumeros(int num, int v[]) {
    for(int i = 0; i < num; i++) {
        printf("%d ", v[i]);
    }
}

void numPar(int num, int v[]) {

    int pares = 0;
    int par = 0;

    for(int i = 0; i < num; i++) {

        if(v[i] % 2 == 0) {
            printf("\n%d", v[i]);
            par ++;
        }

    }

    printf("\nNúmeros pares encontrados: %d\n", par);
}

int main() {

    int num;

    printf("Quantos números o vetor terá? ");
    scanf("%d", &num);

    int v[num];

    lerNumero(num, v);
    mostrarNumeros(num, v);

    numPar(num, v);

    return 0;
}

/*#include <stdio.h>

void lerVetor(int vet[], int n) {

for(int i = 0; i < n; i++) {

printf("Digite o valor da posicao %d: ", i);

scanf("%d", &vet[i]);

}

}

void mostrarVetor(int vet[], int n) {

printf("\nVetor: ");

for(int i = 0; i < n; i++) {

printf("%d ", vet[i]);

}

printf("\n");

}
int contarPares(int vet[], int n) {

int contador = 0;

for(int i = 0; i < n; i++) {

if(vet[i] % 2 == 0) {

contador++;

}

}

return contador;

}
int main() {

int n;

printf("Digite o tamanho do vetor: ");

scanf("%d", &n);

int vetor[n];

lerVetor(vetor, n);

mostrarVetor(vetor, n);

int qtdPares = contarPares(vetor, n);

printf("\nQuantidade de numeros pares no vetor: %d\n",
qtdPares);

return 0;

}*/