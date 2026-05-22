#include <stdio.h>
#include <stdlib.h>

struct No{
    int valor; 
    struct No *prox;
};

void push(struct No **topo, int x){

    struct No *novo = (struct No*)malloc(sizeof(struct No));

    novo->valor=x;

    novo->prox=*topo;

    *topo=novo;

}

void pop(struct No **topo) {
    if (*topo==NULL) {

        printf("Pilha vazia!\n");
    }

    struct No *aux=*topo;

    *topo=(*topo)->prox;

    free(aux);
}

void listar(struct No *topo) {

    struct No *aux=topo;

    printf("TOPO ->");

    while(aux!=NULL) {
         printf("%d -> ", aux->valor);

         aux=aux->prox;
    }

    printf("NULL\n");
}

void mostrar_topo(struct No *topo) {
    if (topo->prox != NULL) {
        printf("%d", &topo);
    }
}

int main()
{
   struct No *topo = NULL;

   push(&topo, 10);
   push(&topo, 20);
   push(&topo, 30);
    
  listar(topo);

   pop(&topo);

   listar(topo);

   mostrar_topo(topo);

    return 0;
}
