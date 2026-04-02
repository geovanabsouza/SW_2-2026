<?php
    $json_str = '{"Nome:": "Caderno Inteligente", "Preço:": 89.90, "Quantidade:" : 57}'; 
    $obj = json_decode($json_str);

    echo"<pre>";
    var_dump ($obj);
    echo"<pre>";
?>