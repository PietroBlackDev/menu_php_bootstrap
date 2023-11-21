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
echo '<h1> Aula legal de foreach </h1> <br>';

$programadores = [];

$programador = [
    "nome" => "MARIA",
    "idade" => 34,
    "sexo" => "F",
    "conhecimentos" => [
        "JAVA", "C#", "JAVASCRIPT"
    ],
    "empresas" => [
        "IBM" => 4,
        "YOUTUBE" => 2,
        "VIVO" => 4
    ]
];
$programadores[] = $programador;

$programador = [
    "nome" => "PEDRO",
    "idade" => 30,
    "sexo" => "M",
    "conhecimentos" => [ 
        "PHP", "NODE", "PYTHON" 
    ],
    "empresas" => [
        "CLARO" => 1,
        "MICROSOFT" => 2,
        "GOOGLE" => 3
    ]
];
$programadores[] = $programador;

$programador = [
    "nome" => "JOSE",
    "idade" => 20,
    "sexo" => "M",
    "conhecimentos" => ['nenhum'],
    "empresas" => [0]
];
$programadores[] = $programador;

$programador = [
    "nome" => "LEO",
    "idade" => 18,
    "sexo" => "M",
    "conhecimentos" => ['nenhum'],
    "empresas" => [0]
];
$programadores[] = $programador;

echo '<pre>';
var_dump($programadores);
echo '</pre>';
echo '<br>';

//VARIAVEIS ABAIXO//
$quant_mulher = 0;
$quant_homem = 0;
$idade_alta = 0;
$idade_baixa = 0;
$com_experiencia = 0;
$sem_empresa = 0;
$soma_experiencias = 0;
$sem_conhecimento = 0;

foreach ($programadores as $elemento) {
    echo "NOME:" .  $elemento['nome'] . '<br>';
    echo "IDADE:" .  $elemento['idade'] . '<br>';
    echo "SEXO:" .  $elemento['sexo'] . '<br>';

    if ($elemento['idade'] <= 30) {
        $idade_baixa++;
    }else {
        $idade_alta++;
    }

    if ($elemento['sexo'] == 'M') {
        $quant_homem++;
    }else{
        $quant_mulher++;
    }

    echo "LINGUAGENS: <br>";
    foreach ($elemento['conhecimentos'] as $linguagem) {
        echo '-' . $linguagem . '<br>';
    }

    if ($linguagem == 'nenhum') {
        $sem_conhecimento++;
    }

    echo "EMPRESAS: <br>";
    foreach ($elemento['empresas'] as $nome_empresa => $periodo) {
        $soma_experiencias = $soma_experiencias + $periodo;
        echo " -$nome_empresa: $periodo anos <br>"; 
    }

    if ($soma_experiencias > 1) {
        $com_experiencia++;
    }
    $soma_experiencias = 0;

    if ($periodo == 0) {
        $sem_empresa++;
    }

    echo '<hr>';
}


echo '<h3> 1 </h3>';
echo "No array tem $quant_homem Masculinos <br>";
echo "No array tem $quant_mulher Femininos <br>";

echo '<h3> 2 </h3>';
echo "No array tem $idade_baixa de Pessoas abaixo dos 31 anos <br>";
echo "No array tem $idade_alta de Pessoas acima dos 30 anos <br>";

echo '<h3> 3 </h3>';
echo "No array tem $com_experiencia Pessoas com mais de 1 ano de experiencia <br>";

echo '<h3> 4 </h3>';
echo "No array tem $sem_conhecimento Pessoas sem conhecimento em linguagens <br>";

echo '<h3> 5 </h3>';
echo "No array tem $sem_empresa Pessoas sem experiencias em empresas <br>";

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
