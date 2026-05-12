#include <stdio.h>
#include <stdlib.h>

struct No
{
    int valor;
    struct No *ant;
    struct No *prox;
};

void inserirInicio(struct No **head, struct No **tail, int x)
{
    struct No *novo = (struct No *)malloc(sizeof(struct No));

    novo->valor = x;
    novo->ant = NULL;
    novo->prox = *head;

    if (*head != NULL)
    {
        (*head)->ant = novo;
    }

    *head = novo;

    // Se a lista estava vazia, tail também aponta para o novo nó
    if (*tail == NULL)
    {
        *tail = novo;
    }
}

void inserirFim(struct No **head, int x)
{
    struct No *novo = (struct No *)malloc(sizeof(struct No));

    novo->valor = x;
    novo->ant = NULL;
    novo->prox = *head;

    if (*head != NULL)
    {
        (*head)->ant = novo;
    }
    else
    {
        struct No *aux = *head;

        while (aux->prox != NULL)
        {
            aux = aux->prox;
        }

        *aux->prox = *novo;
    }
}
/*struct No *novo = (struct No *)malloc(sizeof(struct No));

    novo->valor = x;
    novo->prox = NULL;

    /* // Lista vazia
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
    if (*head == NULL)
    {
        novo->ant = NULL;
        *head = novo;
    }
    else
    {
        struct No *aux = *head;
        while (aux->prox != NULL)
        {
            aux = aux->prox;
        }

        aux->prox = novo;
        novo->ant = aux;
    }*/

void imprimir(struct No *head)
{
    struct No *aux = head;
    printf("NULL <->");

    while (aux != NULL)
    {
        printf("%d -> ", aux->valor);
        aux = aux->prox;
    }
    printf("NULL\n");
}

/*void inserirMeio(struct No **head, struct No **tail, int x)
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
}*/

int main()
{
    struct No *head = NULL;
    struct No *tail = NULL;

    inserirInicio(&head, &tail, 11);
    inserirInicio(&head, &tail, 8);
    inserirInicio(&head, &tail, 5);

    inserirFim(&head, 40);

    imprimir(head);

    printf("Primeiro elemento head: %d\n", head->valor);
    printf("Ultimo elemento tail: %d\n", tail->valor);
    printf("Proximo do tail: %p\n", (void *)tail->prox);

    return 0;
}