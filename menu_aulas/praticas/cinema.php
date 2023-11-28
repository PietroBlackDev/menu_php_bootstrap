<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Menu</title>
</head>
<body>
<?php include 'include/inc_header.php'; ?>

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

}?>

<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
crossorigin="anonymous"
></script>
</body>
</html>