<?php
    //variavel para o titulo da página
    $titulopagina = "Padoca - Quem Somos"; 
    $css = ["main.css", "paginas.css"];
?>

<!DOCTYPE html>
<html lang="pt-br">


<?php include __DIR__ . "/../views/head.php"; //inclui o head ?> 

<body>

    <?php

        //inclui o cabeçalho
        include __DIR__ . "/../views/header.php";

        //inclui o corpo
        include __DIR__ . "/../views/quemsomos.php";
    
        //inclui o rodapé
        include __DIR__ . "/../views/footer.php";
        
    ?>
    
</body>
</html>