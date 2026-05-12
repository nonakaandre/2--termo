
#include <stdio.h>
#include <stdlib.h>

struct No
{
    int valor;
    struct No *prox;
};
typedef struct No No;

// Inserir no início da lista
void inserirInicio(No **head, int x)
{
    No *novo = (No *)malloc(sizeof(No));
    novo->valor = x;
    novo->prox = *head;
    *head = novo;
}

// Imprimir a lista
void imprimir(No *head)
{
    No *aux = head;
    printf("Lista: ");
    while (aux != NULL)
    {
        printf("%d -> ", aux->valor);
        aux = aux->prox;
    }
    printf("NULL\n");
}

// Buscar valor na lista
No *buscar(No *head, int x)
{
    No *aux = head;
    while (aux != NULL)
    {
        if (aux->valor == x)
        {
            return aux;
        }
        aux = aux->prox;
    }
    return NULL;
}

void removerFim(struct No **head)
{
    if (*head == NULL)
    {
        printf("Lista vazia! Nada para remover.\n");
        return;
    }
    struct No *aux = *head;

    if (aux->prox == NULL)
    {
        free(aux);
        *head = NULL;
    }
    else
    {

        while (aux->prox->prox != NULL)
        {
            aux = aux->prox;
        }
        free(aux->prox); // Libera o último nó
        aux->prox = NULL;
    }
}

int main()
{
    No *head = NULL;
    No *resultado;

    // Montando a lista
    inserirInicio(&head, 99);
    inserirInicio(&head, 70);
    inserirInicio(&head, 60);
    inserirInicio(&head, 50);
    inserirInicio(&head, 40);
    inserirInicio(&head, 30);
    inserirInicio(&head, 20);
    inserirInicio(&head, 10);

    imprimir(head);

    // Buscando um valor existente
    resultado = buscar(head, 20);
    if (resultado != NULL)
        printf("Valor 20 encontrado: %d\n", resultado->valor);
    else
        printf("Valor 20 nao encontrado!\n");

    // Buscando um valor que não existe
    resultado = buscar(head, 99);
    if (resultado != NULL)
        printf("Valor 99 encontrado: %d\n", resultado->valor);
    else
        printf("Valor 99 nao encontrado!\n");

    return 0;
}
