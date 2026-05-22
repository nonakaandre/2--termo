#include <stdio.h>
#include <stdlib.h>

struct No
{
    int valor;
    struct No *ant;
    struct No *prox;
};

void inserirInicio(struct No **head, int x)
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
}
   

void inserirFim(struct No **head, int x)
{
    struct No *novo = (struct No *)malloc(sizeof(struct No));

    novo->valor = x;
    novo->prox = NULL;

    if (*head == NULL)
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

        aux->prox = novo;
        novo->ant = aux;
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

/* REMOVENDO UM NÓ*/
void removerInicio(struct No **head)
{
    if (*head == NULL)
    {
        printf("Lista vazia, nada para remover.\n");
        return;
    }
    struct No *aux = *head;

    *head = aux->prox;

    if (*head != NULL)
    {
        (*head)->ant = NULL;
    }
    free(aux);
}

void removerFim(struct No **head)
{
    if (*head == NULL)
    {
        printf("Lista vazia, nada para remover.\n");
        return;
    }
    struct No *aux = *head;

    if (aux->prox == NULL)
    {
        free(aux);
        *head = NULL;
        return;
    }
    while (aux->prox != NULL)
    {
        aux = aux->prox;
    }
    aux->ant->prox = NULL;
    free(aux);
}
/*Buscar em duplamente encadeada
struct No* buscar(struct No *head, int x){
    struct No *aux = head;

    while (aux != NULL)
    {
        if (aux->prox == x) {
            return aux;
        }
        aux = aux->prox;
    }
    return NULL;
}*/

struct No* imprimirReverso(struct No *head) {
    struct No *aux = head;

    if (aux == NULL) {
        printf("Lista vazia.\n");
        return NULL;
    }
    while (aux->prox != NULL) {
        aux = aux->prox;
    }
    printf("NULL <->  ");
    while (aux != NULL) {   
        printf("%d <-> ", aux->valor);
        aux = aux->ant;
    }
    printf("NULL\n");
    return aux;
}


int main()
{
   struct No *head = NULL;
     

    inserirInicio(&head, 11);
    inserirInicio(&head, 8);
    inserirInicio(&head, 5);

    inserirFim(&head, 40);

    /*buscar(&head, 8);

    imprimir(head);

    printf("Primeiro elemento head: %d\n", head->valor);
    printf("Ultimo elemento tail: %d\n", tail->valor);
    printf("Proximo do tail: %p\n", (void *)tail->prox);

    int valor = 8;
    struct No *resultado = buscar(head, valor);

    if (resultado != NULL) {
        printf("Valor encontrado: %d\n", resultado->valor);
    } else {
        printf("Valor não encontrado na lista.\n");
    }*/

    imprimirReverso(head);

    return 0;
}