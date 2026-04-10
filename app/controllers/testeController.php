<?php 

    $numero = 1;

    $nomes = [ 
    "nome1",
    "nome2",
    "nome3"
    ]

?>

<?php for($g = 0; $g < count($nomes); $g++): ?>

    <p><?=   $nomes[$g] ?></p>

<?php endfor; ?>


<?php if($numero < 4): ?>

    <p> <?= $nomes[0] ?> </p>

<?php elseif($numero < 7): ?>

    <p> <?= $nomes[1] ?> </p>

<?php else: ?>

    <p> <?= $nomes[2] ?> </p>

<?php endif; ?>