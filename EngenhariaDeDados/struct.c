#include <stdio.h>
#include <stdlib.h>

// QUANDO CRIAMOS UM NÓ, ESTAMOS CRIANDO UM 'TIPO'
// COMO NORMALIZAÇÃO USAMOS SETA (->) PARA REFERÊNCIAR UM PONTEIRO

struct No
{					 // ESTRUTURA BÁSICA DE UM NÓ
	int valor;		 // VALOR ARMAZENADO
	struct No *prox; // APONTA PARA O PRÓXIMO NÓ -> VAI APONTAR
};

void inserirInicio(struct No **head, int x)
{												 // INSERINDO O PRIMEIRO ELEMENTO
	struct No *novo = malloc(sizeof(struct No)); // RESERVA UM ESPAÇO DE MEMÓRIA DO TAMANHO DE UM NO E DAR O NOME DE *NOVO.
	novo->valor = x;							 // DIFININDO QUE 'NOVO' RECEBE 'VALOR' QUE RECEBE 'X'
	novo->prox = *head;							 // NOVO
	*head = novo;
}
// "**" = UM PONTEIRO APONTANDO PARA UM PONTEIRO.

void imprimir(struct No *head)
{
	struct No *aux = head; // CRIA UM PONTEIRO CHAMADO AUX, QUE APONTA PARA UM NO.
	while (aux != NULL)
	{
		printf("%d -> ", aux->valor);
		aux = aux->prox;
	}
	printf("NULL");
}

void removerInicio(struct No **head)
{ // REMOVER UM NÓ DO INICIO.
	if (*head == NULL)
		return;

	struct No *temp = *head; // CRIA UM PONTEIRO 'TEMP' JUNTO AO 'HEAD'
	*head = (*head)->prox;	 // DESLOCA O HEAD PARA O PRÓXIMO ESPAÇO DE MEMÓRIA
	free(temp);				 // O COMANDO 'FREE' LIMPA CONTEÚDO DE TEMP.
}

void inserirFim(struct No **head, int x)
{
	struct No *novo = (struct No *)malloc(sizeof(struct No));
	novo->valor = x;
	novo->prox = NULL;

	if (*head == NULL)
	{
		*head = novo;
	}
	else
	{
		struct No *aux = *head; // 'struct No' CRIA UMA REFERÊNCIA, PORTANTO NÃO EXISTE UM ESPAÇO ALOCADO.
		while (aux->prox != NULL)
		{
			aux = aux->prox;
		}
		aux->prox = novo;
	}
}

/*void contar(struct No*head, int x) {
   struct No *aux=head;

   while (aux-> != NULL) {
	   if (aux->valor == x) {
		   return aux;
	   }
	   aux = aux->prox;
   }
   return 1;

   }*/

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

	struct No *head = NULL; // CRIA UM HEAD COM VALOR NULL

	inserirInicio(&head, 30); // PREENCHE O PARAMETRO (struct No **head, int x)
	inserirInicio(&head, 20);
	inserirInicio(&head, 10);

	removerInicio(&head);

	inserirFim(&head, 40);
	inserirFim(&head, 50);
	inserirFim(&head, 60);
	inserirFim(&head, 70);

	// procurar(head, 50);
	imprimir(head);
	printf("\n");

	removerFim(&head);
	imprimir(head);
	/*resultado = contar(head, 99);
	if (resultado != NULL)
		printf("Encontrado: %d\n", resultado->valor);
		else
		printf("Não encontrado!\n"); */

	return 0;
}
