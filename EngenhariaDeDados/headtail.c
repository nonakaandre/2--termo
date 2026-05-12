#include <stdio.h>
#include <stdlib.h>

struct No
{
    int valor;
    struct No *prox;
};

void inserirInicio(struct No **head, struct No **tail, int x)
{
    struct No *novo = (struct No *)malloc(sizeof(struct No));

    novo->valor = x;
    novo->prox = *head;

    *head = novo;

    // Se a lista estava vazia, tail também aponta para o novo nó
    if (*tail == NULL)
    {
        *tail = novo;
    }
}

void inserirFim(struct No **head, struct No **tail, int x)
{
    struct No *novo = (struct No *)malloc(sizeof(struct No));

    novo->valor = x;
    novo->prox = NULL;

    // Lista vazia
    if (*head == NULL)
    {
        *head = novo;
        *tail = novo;
    }
    else
    {
        (*tail)->prox = novo; // antigo último aponta para o novo
        *tail = novo;         // tail agora aponta para o novo último
    }
}

void imprimir(struct No *head)
{
    struct No *aux = head;

    printf("Lista: ");
    while (aux != NULL)
    {
        printf("%d -> ", aux->valor);
        aux = aux->prox;
    }
    printf("NULL\n");
}

void inserirMeio(struct No **head, struct No **tail, int x)
{
    struct No *novo = (struct No *)malloc(sizeof(struct No));
    novo->valor = x;
    novo->prox = *head;

    if (novo->prox != 20)
    {
        novo = novo->prox;
    }
    else
    {
        novo->valor = x;
        novo->prox = prox;
    }
}

int main()
{
    struct No *head = NULL;
    struct No *tail = NULL;

    inserirFim(&head, &tail, 10);
    inserirFim(&head, &tail, 20);
    inserirFim(&head, &tail, 30);
    inserirFim(&head, &tail, 15);
    inserirFim(&head, &tail, 9);

    inserirMeio(&head, &tail, 25);

    inserirInicio(&head, &tail, 5);
    inserirInicio(&head, &tail, 2);
    inserirInicio(&head, &tail, 8);

    imprimir(head);

    printf("Primeiro elemento head: %d\n", head->valor);
    printf("Ultimo elemento tail: %d\n", tail->valor);
    printf("Proximo do tail: %p\n", (void *)tail->prox);

    return 0;
}