<?php
//funcao array para filtrar os sados dos contatos -> fields e os campos do formulario que estoy esperando
//temos que percorer os dados 
//criemos tambem arquivo chamado custom.php onde ficarao as funcoes que podemos chamar em qua;que lugar 


function validate(array $fields)
{
//CHAMA A FUNCAO REQUEST DO CUSTAM E ONDE IA $_post TROCA POR   $REQUEST PAR PODER FAZER A LOGICA DE ESCOLHER POST OU GET
    $request = request();

    $validate = [];



    //O que e o $key e o $value vai ser name e $kei vai ser email em pages/forms/contato.php
    foreach ($fields as $field => $type) {
        switch ($type) {
            case 'n':
                # code... 
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_SPECIAL_CHARS);
                break;
            case 'i':
                # code...
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                # code...
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
            case 's':
                # code... 
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_SPECIAL_CHARS);
                break;
            case 't':
                # code... 
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_SPECIAL_CHARS);
                break;
        }
    }
    //o retorno vai ser um objeto

    return (object) $validate;
}

//verifica se os campos estao vazios

function isEmpty(){

    //no comeco da funcao o $empty tem o valor falso
    $empty = false;

    $request = request();
    foreach ($request as $key => $value) {
        # code...Se encontrou algum campo em branco recebe true 
        if(empty($request[$key])){
            $empty = true;
        }
    }
    return $empty;
}