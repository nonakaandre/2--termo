#include <stdio.h>
#include <stdlib.h>

struct No {
	int valor; 
	struct No *prox;
};


void inserirInicio(struct No **head, int x) {  // INSERINDO O PRIMEIRO ELEMENTO
	struct No *novo = malloc(sizeof(struct No));
	novo->valor = x; //DIFININDO QUE 'NOVO' RECEBE 'VALOR' QUE RECEBE 'X'
	novo->prox = *head;  
	*head = novo;
}
void imprimir(struct No *head) {
	struct No *aux = head; 
	while (aux != NULL) {
		printf("%d -> ", aux->valor);
		aux = aux->prox;
	}
	printf("NULL");
}

void removerInicio(struct No *head) {
	if (*head == NULL) return;

	struct No *temp = *head;
	*head = (*head)->prox;
	free(temp);
}

int main() {
	
	struct No *head = NULL; //CRIA UM HEAD COM VALOR NULL
	
	inserirInicio(&head, 30);
	inserirInicio(&head, 20);
	inserirInicio(&head, 10);
	
	removerInicio()
    imprimir(head);
	
	return 0;
}
