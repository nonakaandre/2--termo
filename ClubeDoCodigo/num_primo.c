#include <stdio.h>

int main( ){

int soma = 0;

for(int cont=2; cont<100; cont++) {
    int hPrimo = 1; 
    for(int div=2; div<cont; div++) {
        if(cont% div == 0) {
            hPrimo = 0;
            break;
        }
    }
    if(hPrimo == 1){
        soma = soma + cont;
    }
}
printf("%d\n", soma);

return 0;
}
