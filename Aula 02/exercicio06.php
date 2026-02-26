<?php
    echo "EXERCÍCIO 6:";
    echo '<hr>';

    $num = 1;
    $anterior = $num - 1;

    for ($num == 1; $num <= 50;$num++) {
        $conta = $num + $anterior;
        echo $conta;
        echo "<br>";
    }
