<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <?php

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $anoatual = date('Y');
        $nasc = $anoatual - $idade;
        //echo $nome;
    ?>
     <hr>
    <p>O nome é: <?php echo $nome; ?> </p>
    <p>O email é: <?php echo $email; ?> </p>
    <p>A idade é: <?php echo $idade; ?> </p>
    <p> O seu ano de nascimento é: <?php echo $nasc?> </p> 
    <?php 
        if ($idade >= 18){
            echo "<p style='color:green;'> Você é maior de idade. </p>";
            }
        else {
            echo "<p style='color:red;'> Você é menor de idade. </p>";
        }
        
        echo "<p>LISTA DE CLIENTES</p>";
        echo "<ul>";
        //laço de repetição
        for ($i = 1; $i <= $idade ; $i ++) {
            echo "<li> Cliente $i </li>";
        }
        echo "</ul>";
    ?> 
    <hr>
    <!-- <p>LISTA DE CLIENTES</p> -->
    <!--<ul>
        <li>Cliente 1 </li>
        <li>Cliente 2 </li>
        <li>Cliente 3 </li>
    </ul> -->

</body>
</html>