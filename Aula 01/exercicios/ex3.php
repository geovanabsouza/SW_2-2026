<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Números Pares</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 20; $i++) {
            $par = ($i % 2 == 1);
            if ($i != $par) {
                echo $i . "<br>";
            }
                
            }
        
    ?>
        
</body>
</html>