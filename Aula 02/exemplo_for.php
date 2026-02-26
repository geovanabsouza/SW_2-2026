<?php
    echo "Exemplo com FOR:";
    echo "<hr>";

    for ($i=01; $i <=5; $i++) {
        echo $i;
        echo "<br>";
    }

    echo "<hr>";
     
    $nomes = ['FULANO', 'CICLANO', 'BELTRANO', 'ANDERSON'];
    //echo $nomes[0];
    //echo "<br>";
    //echo $nomes[1];
    //echo "<br>";
    //echo $nomes[2];
    //echo "<br>";

    $qntd = count($nomes);
    echo "Há " . $qntd . " conteúdo(s).";

    echo "<hr>";
    
    for ($i=0; $i <= $qntd - 1; $i++) {
        echo $nomes[$i];
        echo "<br>";
    }

    echo "<hr>";

    echo "Exemplo com FOREACH:";

    echo "<hr>";

    foreach ($nomes as $key => $value) {
        echo $key . " ==> " . $value;
        echo "<br>";
    }
?>

