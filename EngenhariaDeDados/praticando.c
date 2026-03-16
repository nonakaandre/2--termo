/* #include <stdio.h>

                                     TESTE COM FUNÇÕES
void mostrarMensagem() {
    printf("Estou aprendendo funções em C\n");
}

int main(){
    mostrarMensagem();

    return 0;
}

int dobro(int numero) {
    return numero * 2;
}

int main(){

    printf("%d\n", dobro(5));

    return 0;
}*/
// ENTENDENDO O BÁSICO
/*#include <stdio.h>

int soma(int a, int b) {
    return a + b;
}

int main() {
int numA, numB;
    printf("Digite um número: ");
    scanf("\n%d", &numA);

    printf("Agora digite um número para ser somado a ele: ");
    scanf("%d", &numB);
 
    int resultado;
    resultado = soma(numA,numB);

    printf("A soma é %d.", resultado );

   return 0;
}*/
/*#include <stdio.h>
int quadrado(int num) {
    return num * num;
}

int main() {

int num;    
    printf("Digite um número: ");
    scanf("%d", &num);

int resultado = quadrado(num);
    printf("resultado %d\n", resultado);

    return 0;
}*/




/*#include <stdio.h>

int maior;
int maiorNumero(int a, int b) {
    if(a < b) {
        maior = b;
    } else {
        maior = a;
    }
    return maior;
}
int main () {
int num1, num2;

        printf("Digite um número inteiro: ");
        scanf("%d", &num1);

        printf("Digite outro número inteiro: ");
        scanf("%d", &num2);

        maior = maiorNumero(num1,num2);

        printf("O maior número é %d\n", maior);

    return 0;
}*/

#include <stdio.h>
    //SEPARANDO NÚMEROS MAIORES 
int maiorNumero(int a, int b) {
    if(a > b ) {
        return a;
    }
     else if ( b > a) {
        return b;
    }
     else {
        return -1;
    }
}

int main () {
int num1, num2;
int maior;

        printf("Digite um número inteiro: ");
        scanf("%d", &num1);

        printf("Digite outro número inteiro: ");
        scanf("%d", &num2);

        maior = maiorNumero(num1,num2);

        if(maior == -1) {
            printf("Os números são iguais!\n");
        } else {
            printf("O maior número é %d\n", maior);
        }
    return 0;
}