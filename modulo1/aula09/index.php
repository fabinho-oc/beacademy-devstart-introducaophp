<?php

//captura de informações que consta na variavel global $_SERVER

//echo $_SERVER['REQUEST_URI'];

//Guarda a informação dentro de uma variavel


$url = $_SERVER['REQUEST_URI'];

include 'telas/menu.php';
include 'telas/head.php'; // cabeçalho da pagina
include 'acoes.php'; // inclusão para funcionamento das funções criadas


//Criação do Match em substituição ao IF, ELSEIF E ELSE

match($url){
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' =>listar(),
    '/relatorio' => relatorio(),
    default => erro404(),
};



/* Comentando o IF, ELSEIF e ELSE, substituido pelo Match
 if ($url === '/') {

    // include 'telas/home.php'; => substituido pela função

    home(); //é adotado a utilização da função no lugar da opção do include

}elseif ($url ==='/login'){

    //include 'telas/login.php'; => substituido pela função

    login();

} elseif ($url ==='/cadastro'){

    //include 'telas/cadastro.php'; => substituido pela função
    cadastro();

} elseif ($url ==='/listar'){

    //include 'telas/listar.php'; => substituido pela função
    listar();

} else{

    //include 'telas/404.php'; => substituido pela função
    erro404();

}
*/


include 'telas/footer.php'; // rodapé da pagina