<?php
    include_once __DIR__ . "/config/variaveisgerais.php";

    // pega das informações do SERVER o vetor REQUEST_URI (o que o usuário digita na pesquisa)
    $caminho = $_SERVER["REQUEST_URI"];

    // separa o caminho dos argumentos 
    $vetorcaminho = parse_url($caminho);

    // pega apenas o caminho "path" sem os argumentos "query"
    $somentecaminho = $vetorcaminho["path"];

    // tira as barras antes e depois do caminho
    $somentecaminho = trim($somentecaminho, "/");

    // pega o caminho e pede para separar a string de acordo com a barra (pode ser qualquer caractere)
    $vetorcaminho = explode("/", $somentecaminho);

    // pega apenas o primeiro caminho que tiver no array
    $url = $vetorcaminho[0];

    //inclui o mapa de rotas
    include_once __DIR__ . "/app/core/Rotas.php";

    // valida se existe um apelido no array - Parametro1 = Apelido, Parametro2 = onde vai procurar o apelido
    if(array_key_exists($url, $rotas)){

        // pega o nome do controlador do mapa de rotas
        $nomecontrolador = $rotas[$url];

        //envia para o controlador certo
        include_once __DIR__ . "/app/controllers/{$nomecontrolador}.php"; // {} define que é uma variavel - só detecta variável se tiver aspas dupla
    } else {
        include_once __DIR__ . "/app/controllers/inexistenteController.php"; // include - continua lendo o código se tiver erro
    }                                                                        // require - mata o código se tiver erro

?>