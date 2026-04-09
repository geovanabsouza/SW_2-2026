<?php
    $produtos => ['produtos' => [['Nome' => 'Caderno Inteligente', 'Preço:': 89.90,'Quantidade': 50],
        ['Nome'=>'Box Caneta Booby Goods','Preco'=>19.99,'Quantidade' =>18],
        ['Nome'=>'Agenda','Preco'=>23.50,'Quantidade'=>37}]]];

    $json = json_encode($produtos);
    file_put_contents("produtos.json", $json);

?>