<?php 

    //variavel para o titulo da página
    $titulopagina = "Início - Padoca"; 

    //CSSs a serem carregados
    $css = ["main.css", "paginas.css"];

    include __DIR__ . "/../core/Calculadora.php";

    $objCalculadora = new Calculadora();

    $numero1 = 4;
    $numero2 = 8;
    $numero3 = 2;

    $total = $objCalculadora->somar($numero1, $numero2);

    $media = $objCalculadora->media($numero1, $numero2);

    include __DIR__ . "/../model/Produtos.php";

    $objProdutos = new Produtos();

    $objProdutos->capturarDado(1);

    $nome = $objProdutos->getNome();
    
?>

<!DOCTYPE html>
<html lang="pt-br">


<?php include __DIR__ . "/../views/head.php"; //inclui o head ?> 

<body>

    <?php

        //inclui o cabeçalho
        include __DIR__ . "/../views/header.php";

        //inclui o corpo
        include __DIR__ . "/../views/inicio.php";
    
        //inclui o rodapé
        include __DIR__ . "/../views/footer.php";

    ?>
    
</body>
</html>