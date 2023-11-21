<?php

function porcentagem_nx ( $parcial, $total ) {
    return ( $parcial * 40 ) / $total;
}

function retorna_semana($numero_semana){
    $semana = [
        'DOMINGO',
        'SEGUNDA-FEIRA',
        'TERÇA-FEIRA',
        'QUARTA-FEIRA',
        'QUINTA-FEIRA',
        'SEXTA-FEIRA',
        'SABADO'
    ];
    return $semana[$numero_semana -1];
}

$clientes = [];

$cliente1 = [
    "Dia da semana" => retorna_semana(2),
    "Parte do dia" => "V",
    "Valor" => 15,
    "Estudante" => "sim",
    "Método de pagamento" => "credito"
];
$clientes[] = $cliente1;

$cliente2 = [
    "Dia da semana" => retorna_semana(4),
    "Parte do dia" => "V",
    "Valor" => 15,
    "Estudante" => "nao",
    "Método de pagamento" => "dinheiro"
];
$clientes[] = $cliente2;

$cliente3 = [
    "Dia da semana" => retorna_semana(6),
    "Parte do dia" => "N",
    "Valor" => 40,
    "Estudante" => "nao",
    "Método de pagamento" => "credito"
];
$clientes[] = $cliente3;


foreach ($clientes as $clientela) {
    $dia = $clientela['Dia da semana'];
    echo "$dia <br>";

    $parte_do_dia = $clientela['Parte do dia'];
    $estudante = $clientela['Estudante'];
    $pagamento = $clientela['Método de pagamento'];
    $valor = $clientela['Valor'];

    if ($estudante == 'sim') {
        $valor = $valor / 2;
        echo "$valor <br>";
    }
    elseif ($pagamento == 'dinheiro') {
        echo "$valor <br>";
    }
    elseif ($parte_do_dia == "V") {
        $valor = $valor /2;
    }
    else {
       $valor = $valor - porcentagem_nx(30, 100);
       echo $valor;
    }

}
