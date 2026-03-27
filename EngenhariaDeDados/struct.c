#include <stdio.h>
#include <stdlib.h>

//QUANDO CRIAMOS UM NÓ, ESTAMOS CRIANDO UM 'TIPO' 
//COMO NORMALIZAÇÃO USAMOS SETA (->) PARA REFERÊNCIAR UM PONTEIRO 

struct No {      // ESTRUTURA BÁSICA DE UM NÓ
	int valor;   // VALOR ARMAZENADO
	struct No *prox;  // APONTA PARA O PRÓXIMO NÓ -> VAI APONTAR 
};


void inserirInicio(struct No **head, int x) {  // INSERINDO O PRIMEIRO ELEMENTO
	struct No *novo = malloc(sizeof(struct No)); //RESERVA UM ESPAÇO DE MEMÓRIA DO TAMANHO DE UM NO E DAR O NOME DE *NOVO.
	novo->valor = x; //DIFININDO QUE 'NOVO' RECEBE 'VALOR' QUE RECEBE 'X'
	novo->prox = *head;  // NOVO 
	*head = novo;
}
// "**" = UM PONTEIRO APONTANDO PARA UM PONTEIRO.

void imprimir(struct No *head) {
	struct No *aux = head; // CRIA UM PONTEIRO CHAMADO AUX, QUE APONTA PARA UM NO.
	while (aux != NULL) {  
		printf("%d -> ", aux->valor);
		aux = aux->prox;
	}
	printf("NULL");
}

void removerInicio(struct No **head) { //REMOVER UM NÓ DO INICIO.
	if (*head == NULL) return;
	
	struct No *temp = *head; // CRIA UM PONTEIRO 'TEMP' JUNTO AO 'HEAD'
	*head = (*head)-> prox; //DESLOCA O HEAD PARA O PRÓXIMO ESPAÇO DE MEMÓRIA
	free(temp);				// O COMANDO 'FREE' LIMPA CONTEÚDO DE TEMP.
}

void inserirFim(struct No **head, int x) { 
	struct No *novo = (struct No*) malloc(sizeof(struct No)); 
	novo->valor = x;
	novo->prox = NULL;
	
	if(*head==NULL) {
		*head = novo;
	} else {
		struct No *aux = *head; // 'struct No' CRIA UMA REFERÊNCIA, PORTANTO NÃO EXISTE UM ESPAÇO ALOCADO.
			while(aux->prox != NULL) {
				aux = aux->prox;
			}
			aux->prox = novo;
	}
}

void procurar() { 
	
	
	}
	

	/* */


int main() {
	
	struct No *head = NULL; //CRIA UM HEAD COM VALOR NULL
	
	inserirInicio(&head, 30); //PREENCHE O PARAMETRO (struct No **head, int x)
	inserirInicio(&head, 20);
	inserirInicio(&head, 10);
	
    imprimir(head);
    
    removerInicio(&head);
    
    inserirFim(&head, 40);
	inserirFim(&head, 50);
    
    imprimir(head);

	procurar(head, 50);
	
	return 0;
}
