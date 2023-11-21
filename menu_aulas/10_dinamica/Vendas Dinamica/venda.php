<?php

$vendas = [];

$pedido = [
    "codigo_venda" => 234,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 100,
    "desconto" => 10,
    "valor_tota" => 90,
    "forma_pagamento" => "CARTÃO DÉBITO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 4,
            "valor_unitario" => 10,
            "valor_total" => 40
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 3,
            "valor_unitario" => 20,
            "valor_total" => 60
        ]
    ]
];
$vendas[] = $pedido;

$pedido = [
    "codigo_venda" => 235,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "002",
    "sub_total" => 50,
    "desconto" => 0,
    "valor_tota" => 50,
    "forma_pagamento" => "CARTÃO CRÉDITO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 3,
            "valor_unitario" => 10,
            "valor_total" => 30
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 1,
            "valor_unitario" => 20,
            "valor_total" => 20
        ]
    ]
];
$vendas[] = $pedido;

$pedido = [
    "codigo_venda" => 236,
    "data_venda" => "23/10/2023",
    "codigo_cliente" => "001",
    "sub_total" => 70,
    "desconto" => 10,
    "valor_tota" => 60,
    "forma_pagamento" => "DINHEIRO",
    "itens" => [
        [
            "item" => 1,
            "codigo" => 100,
            "descricao" => "Produto teste 1",
            "qtde" => 3,
            "valor_unitario" => 10,
            "valor_total" => 30
        ],
        [
            "item" => 1,
            "codigo" => 101,
            "descricao" => "Produto teste 2",
            "qtde" => 2,
            "valor_unitario" => 20,
            "valor_total" => 40
        ]
    ]
];

$vendas[] = $pedido;

$soma_dinheiro = 0;
$soma_cartao_debito = 0;
$soma_cartao_credito = 0;
$soma_total = 0;
$soma_compra_001 = 0;
$soma_compra_002 = 0;
$cliente_001 = '001';
$cliente_002 = '002';
$soma_desconto_001 = 0;
$soma_desconto_002 = 0;
$valor_produto_1 = 0;
$q_total_produto_1 = 0;
$valor_produto_2 = 0;
$q_total_produto_2 = 0;

foreach ($vendas as $elemento) {
    $soma_total = $soma_total + $elemento['valor_tota'];

    if ($elemento['forma_pagamento']== 'DINHEIRO') {
        $soma_dinheiro = $soma_dinheiro + $elemento['valor_tota'];
    }
    elseif ($elemento['forma_pagamento']== 'CARTÃO DÉBITO') {
        $soma_cartao_debito = $soma_cartao_debito + $elemento['valor_tota'];
        
    }else {
        $soma_cartao_credito = $soma_cartao_credito + $elemento['valor_tota'];
    }

    if ($elemento['codigo_cliente'] == '001') {
        $soma_compra_001 = $soma_compra_001 + $elemento['valor_tota'];
    }
    else {
        $soma_compra_002 = $soma_compra_002 + $elemento['valor_tota'];
    }

    if ($elemento['codigo_cliente'] == '001') {
        $soma_desconto_001 = $soma_desconto_001 + $elemento['desconto'];
    }
    else {
        $soma_desconto_002 = $soma_desconto_002 + $elemento['desconto'];
    }

    foreach ($elemento['itens'] as $produto) {
        if ($produto['descricao'] == 'Produto teste 1') {
            $produto_1 = $produto['descricao'];
            $valor_produto_1 = $valor_produto_1 + $produto['valor_total'];
            $q_total_produto_1 = $q_total_produto_1 + $produto['qtde'];
        }
        else {
            $produto_2 = $produto['descricao'];
            $valor_produto_2 = $valor_produto_2 + $produto['valor_total'];
            $q_total_produto_2 = $q_total_produto_2 + $produto['qtde'];
        }
    }
}

echo 'O valor total vendido foi: ' . $soma_total . ' reais<br>';
echo 'O valor total em dinheiro foi: ' . $soma_dinheiro . '<br>';
echo 'O valor total em cartão de crédito foi: ' . $soma_cartao_credito . '<br>';
echo 'O valor total em cartão de débito foi: ' . $soma_cartao_debito . '<br>';
echo 'O código do cliente é: ' . $cliente_001 . ' e o total vendido foi: ' . $soma_compra_001 . '<br>';
echo 'O código do cliente é: ' . $cliente_001 .' e o total de desconto foi: ' . $soma_desconto_001 . '<br>';
echo 'O código do cliente é: ' . $cliente_002 . ' e o total vendido foi: ' . $soma_compra_002 . '<br>';
echo 'O código do cliente é: ' . $cliente_002 . ' e o total de desconto foi: ' . $soma_desconto_002 . '<br>';
echo 'A descrição do produto é: ' . $produto_1 . ' valor total vendido: ' . $valor_produto_1 . ' e sua quantidade vendida foi: ' . $q_total_produto_1 . '<br>';
echo 'A descrição do produto é: ' . $produto_2 . ' valor total vendido: ' . $valor_produto_2 . ' e sua quantidade vendida foi: ' . $q_total_produto_2 . '<br>';

//Lider = Henrique Silva
//Analista  = Gabriel Felipe
//Programador = Pietro Ricardo