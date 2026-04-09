<?php
    $conteudo = file_get_contents("produtos.json");
    $dados = json_decode($conteudo, true);

    $novo_produto = [
        "Nome" => "PC Gamer",
        "Preco" => 6.890,
        "Quantidade" => 34
    ];

    $dados["produtos"][] = $novo_produto;
    $json_novo = json_encode($dados);

    file_put_contents("produtos.json", $json_novo);

?>