<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
</head>
<body>
    <?php
        $n1 = 8;
        $n2 = 7;
        $n3 = 9;

        $media = ($n1 + $n2 + $n3) /3;

        if ($media >= 7) {
            echo "Média: " . $media . " - Aprovado(a)!" . "<br>";
        } else {
            echo "Média: " . $media . " - Reprovado(a)!" . "<br>";
        }

    ?>
    
</body>
</html>