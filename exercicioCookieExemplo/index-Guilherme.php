formulário

select vc tem uma lista de valores q correspondem às categorias


<?php
    if(isset($_COOKIE['codcategoria'])){
        //verificou se o cookie existe
        if ($_COOKIE['codCategoria'] == 1){
            //carregar na primeira linha os produtos da categoria 1
            //a partir da segunda linha vc decide a ordem
        }
        else if ($_COOKIE['codCategoria'] == 2){
             //carregar na primeira linha os produtos da categoria 2
            //a partir da segunda linha vc decide a ordem
        }
        else if ($_COOKIE['codCategoria'] == 3){
             //carregar na primeira linha os produtos da categoria 3
            //a partir da segunda linha vc decide a ordem
        }
    }
    else{
        //o cookie não existe, o usuário nunca acessou a minha página
        //carregar os meus produtos, ordem = a vc decidir
    }