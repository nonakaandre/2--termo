#include <stdio.h>
#include <stdbool.h>

int main(){

int soma = 0, inicio=0, fim, maior, menor;

printf ("Digite o número inicial: ");
scanf ("%d", &inicio);
printf("Agora, o número final: ");
scanf ("%d", &fim);

for (int cont=inicio; cont<=fim; cont++) {
     bool primo = 1;
    if(cont<2) {
        continue;
    }    
            for (int div=2; div<cont; div++){
            if(cont%div==0){
                primo = 0;
                break;
            } 
        }
        if(primo == 1) {
                soma += cont;
                if(soma == cont) {
                menor = cont;
                maior = cont;
               } else if (cont>maior){
                maior = cont;
               }
               }
}
printf("%d\n",soma);
printf("O menor número é %d\n", menor);
printf("O maior número é %d\n", maior);

    return 0;
}