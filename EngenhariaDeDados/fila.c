#include <stdio.h>
#include <stdlib.h>
struct No {
int valor;
struct No *prox;
};
void enqueue(struct No **inicio, struct No **fim, int x) {
struct No *novo = (struct No*) malloc(sizeof(struct No));
novo->valor = x;
novo->prox = NULL;
if (*inicio == NULL) {
*inicio = novo;
*fim = novo;
} else {
(*fim)->prox = novo;
*fim = novo;
}
}

void dequeue(struct No **inicio, struct No **fim) {
if (*inicio == NULL) {
printf("Fila vazia!\n");
return; }
struct No *aux = *inicio;
*inicio = (*inicio)->prox;
if (*inicio == NULL) {
*fim = NULL; }
free(aux); }
void listar(struct No *inicio) {
struct No *aux = inicio;
printf("Fila: ");
while (aux != NULL) {
printf("%d -> ", aux->valor);
aux = aux->prox; }
printf("NULL\n"); }

int main() {
struct No *inicio = NULL;
struct No *fim = NULL;
enqueue(&inicio, &fim, 10);
enqueue(&inicio, &fim, 20);
enqueue(&inicio, &fim, 30);
listar(inicio);
dequeue(&inicio, &fim);
listar(inicio);
return 0;
}