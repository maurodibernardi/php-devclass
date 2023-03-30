<?php 

function load() {

    //pega a variave $page (Callback) na url aplica do proprio php filter-input para filtrar e FILTER_SANITIZE_URL para evitar ejeção de codigo malicioso
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

    strip_tags($page);

    //Se a pagina nula vai para a home(pagina inicial)
    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if(!file_exists($page)){
        throw new \Exception("Opa, Alguma coisa errada Aconteceu!");
    }

    return $page;
}
?>
