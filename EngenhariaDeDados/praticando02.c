/*// EXECÍCIO 4 PAR
#include <stdio.h>

int ehPar(int num) {
    return num % 2 == 0; 
    // INT É USADO COMO BOOLEAN (SE VDD == 1, CASO FALSO == 0)
}

int main () {
int num;
    printf("Digite um número inteiro: ");
    scanf("%d", &num);

    int resultado = ehPar(num);
    // RESULTADO RECEBE VERDADEIRO (1) OU FALSO (0) 
if(resultado == 1) {
    printf("O número é par.\n");
} else {
    printf("O número é impar.\n");
}

    return 0;
}*/

/*// EXECÍCIO 5 POSITIVO/NEGATIVO
#include    <stdio.h>

int positivoOuNegativo(int num) {
   if(num > 0) return 1;
   else if(num < 0) return -1;
   else return 0;  
}

int main() {

    int num;
    printf("Digite um número inteiro: ");
    scanf("%d", &num);

    int resultado = positivoOuNegativo(num);

    if(resultado == 1)   printf("positivo\n");
    else  if(resultado == 0)   printf("Zero\n"); 
    else   printf("Negativo\n");
    
    return 0;
}*/

/*// EXERCÍCIO 6 TABUADA
#include <stdio.h>

 void tabuada(int num) {
    int tot;
    
    for(int i = 1; i <= 10; i++) {
        tot = num * i;
        printf("%d x %d = %d\n",num, i, tot);
    }
 }

int main() {
    int num;

    printf("Digite um número a ser multiplicado: ");
    scanf("%d", &num);

     tabuada(num);
    
    return 0;
}*/

/*// EXERCÍCIO 7
#include <stdio.h>

void fatorial(int num) {
    int fat=1;
    for(int i=num; i>0; i--) {
    fat *= i; 
   printf("%d - ", fat);
    }
    printf("O fatorial é %d\n", fat);
     
}

int main() {
    int num;  

    printf("Digite um número inteiro: ");
    scanf("%d", &num);

    fatorial(num);

    return 0;
}*/
// CORREÇÃO EXERCÍCIO 7
#include <stdio.h>

void fatorial(int num) {
    int fat = 1;

    printf("%d! = ", num);

    for(int i = num; i > 0; i--) {
        fat *= i;
        printf("%d", i);

        if(i > 1) {
            printf(" x ");
        }
    }

    printf(" = %d\n", fat);
}

int main() {
    int num;

    printf("Digite um número inteiro: ");
    scanf("%d", &num);

    fatorial(num);

    return 0;
}


