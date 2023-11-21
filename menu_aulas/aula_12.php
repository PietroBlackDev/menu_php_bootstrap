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
<?php
include 'include/inc_header.php';

echo "<h1>Aula de função </h1>";

//Trecho de codigo reutilizavel, com uma finalidade especifica
//função tem de ter no maximo 25 linhas (boa pratica)

function soma_numeros(){
    return 3 + 3;
}

echo soma_numeros();

echo "<br>";

function exibe_nome(){
    echo 'WILLIAM';
}

exibe_nome();

echo "<br>";

function exibe_cidade($nome_cidade, $uf='SP'){  
    echo $nome_cidade . ' ' . $uf . '<br>';
}

exibe_cidade('São Roque', 'SP');
exibe_cidade('Mairinque');
exibe_cidade('Ibiuna', 'MG');

echo "<br>";

Function calcular_media($n1, $n2){
    return ($n1 + $n2) / 3 . '<br>';
}

echo calcular_media(2, 2);
echo calcular_media(3, 6);
echo calcular_media(6, 7);

echo "<br>";

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

echo retorna_semana(1);

//porcentagem
function porcentagem_nx ( $parcial, $total ) {
    return ( $parcial * 100 ) / $total;
}









?>

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