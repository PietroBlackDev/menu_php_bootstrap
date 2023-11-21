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
//aula de operadores

echo '<h1> Operadores e contas basicas </h1>';

// + (soma)
// - (subtração)
// * (multiplicação)
// / (divisão)
// % MOD (módulo)
// += (pega o valor ja atribuido e soma com o resultado)

$valor1 = 10; //(UM IGUAL É OPERADOR DE ATRIBUIÇÃO) 

$valor1 == 10; //(DOIS IGUAIS É OPERADOR DE COMPARAÇÃO) ("10" == 10 -> V )

$valor1 === 10; //(TRES IGUAIS UMA COMPARAÇÃO COMPLETA, LADOS E TIPOS DE VARIAVEIS) ("10" === 10 -> F)

$valor2 = 10;
$valor3 = 20;

$resultado = 1;

$resultado += ($valor2 + $valor3);

$resultado = $resultado + ($valor2 + $valor3);

echo $resultado . '<br>';

echo 'A sobra dessa conta é ' . ($valor2 % $valor3);

echo '<br>';

echo 'resultado da soma é ' . ($valor2 + $valor3);

echo '<br>';

echo 'resultado da subtração é ' . ($valor2 - $valor3);

echo '<br>';

echo 'resultado da divisão é ' . ($valor2 / $valor3);

echo '<br>';

echo 'resultado da multiplicação é ' . ($valor2 * $valor3);

//EXEMPLO DE MATRIZ

echo '<h1> Matriz do meu aniversario </h1>';

$eu = [
    'dia' => 30,
    'mes' => 03,
    'ano' => 2005
];

echo '<br>';

echo 'Nasci no dia ' . $eu['dia'] , ' do ' . $eu['mes'] , ' do ano ' . $eu['ano'];

echo '<br>';

echo 'A soma da minha data de nascimento é ' . ($eu['dia'] + $eu['mes'] + $eu['ano']);

echo '<br>';

echo 'A subtração da minha data de nascimento é ' . ($eu['dia'] - $eu['mes'] - $eu['ano']);

echo '<br>';

echo ' A divisão da minha data de nascimento é ' . ($eu['dia'] / $eu['mes'] / $eu['ano']);

echo '<br>';

echo ' A multiplicação da minha data de nascimento é ' . ($eu['dia'] * $eu['mes'] * $eu['ano']);

echo '<br>';

echo  ' A sobra da minha data de nascimento é ' . ($eu['dia'] % $eu['mes'] % $eu['ano']);

echo '<br>';

//TABUADA DO 2 ABAIXO

$div = 2;

echo '<h1> Tabuada do DOIS </h1>';
echo '2x0 = ' . ($div * 0);
    echo '<br>';
echo '2x1 = ' . ($div * 1);
    echo '<br>';
echo '2x2 = ' . ($div * 2);
    echo '<br>';
echo '2x3 = ' . ($div * 3);
    echo '<br>';
echo '2x4 = ' . ($div * 4);
    echo '<br>';
echo '2x5 = ' . ($div * 5);
    echo '<br>';
echo '2x6 = ' . ($div * 6);
    echo '<br>';
echo '2x7 = ' . ($div * 7);
    echo '<br>';
echo '2x8 = ' . ($div * 8);
    echo '<br>';
echo '2x9 = ' . ($div * 9);
    echo '<br>';
echo '2x10 = ' . ($div * 10);

$numero1 = 10;
$numero2 = 10;

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