<?php
session_start(); 
session_destroy();

/* redirecionamento o usuario para o arquivo indicado após Location :
IMPORTANTE: ESTE COMANDO SÓ FUNCIONA SE ESTIVER LOGO NO INICIO DE UM ARQUIVO .PHP. nÕ FUNCIONA SE FOR COLOCADO DEEPOIS DE QUALQUER CONTEUDO html OU IMPRESÃO NO NAVEGADOR    */  

// header();

/* Se qusermos eliminar uma informação especifica dentro da sessãp, basta remover o array $_SESSION o dado armazenado em uma chave especifica usando a funçao unset().
Exemplo:
    unset($_SESSION["CIDADE"])

Como verificar se um a variavel /valor foi definido na sassão ?
    if (iset($_SESSION["logado"])) {
    // usuario ja fez o login 
    } else { 
        // usuario não fez o login
    }

*/
?>
<h1>Você saiu com sucesso!!</h1>