#include <stdio.h>

int dobro(int d) { 
    return d * 2;
}
int main() {
    int v[5];
    for (int i=0; i<5; i++) {
        printf("Digite o nº %d inteiro: ", i + 1);
        scanf("%d", &v[i]);
    }

    printf("Os números digitados são %d,%d,%d,%d,%d\n", v[0], v[1], v[2], v[3], v[4]);

    
        printf("O dobro de cada vetor é %d, %d ", dobro (v[0]),dobro(v[1]));
    
    

    return 0;
}