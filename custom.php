<?php
//funcoes que podem ser usadas em qualquer lugar 

//dd para chamar array 

function dd($dump)
{
    var_dump($dump);
    die();
}


//pegar dados tanto do POST quanto GET do formulario contato, mas pode ser usado em qualque pagina dentro projeto.

function request()
{

    $request = $_SERVER['REQUEST_METHOD'];

    if ($request == 'POST') {
        return $_POST;
    }
    return $_GET;
}
