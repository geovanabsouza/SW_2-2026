<?php
    $produtos = array(
        "Nome:" => "Caderno Inteligente", 
        "Preco:" => 89.90, 
        "Quantidade:" => 137 
        );

    $json_str = json_encode($produtos);
    file_put_contents("produtos.json", $json_str);

    echo "$json_str";

    
?>