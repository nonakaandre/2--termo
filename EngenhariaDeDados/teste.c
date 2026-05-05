#include <stdio.h>

void lerIdades(int v[], int n) {

for (int i = 0; i < n; i++) {

printf("Digite a idade %d: ", i +
1);

scanf("%d", &v[i]);

}

}

int main() {
    printf("digite: ");
    scanf("%d", &n);

    lerIdades(5,3);
}