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
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

//echo 'textoqualquer';
//comentario

$nome_variavel = 88; // <--como definir variavel
echo 'Tipo da variavel: ' . gettype($nome_variavel) . " -  $nome_variavel "; // <--printar a variavel na tela (integer)

echo'<br>';

$nome_variavel = '88'; // <--como definir variavel
echo gettype($nome_variavel); // <--printar a variavel na tela (string)

echo'<br>';

$nome_variavel = 88.; // <--como definir variavel
echo gettype($nome_variavel); // <--printar a variavel na tela (double)

echo'<br>';

$nome_variavel = true; // <--como definir variavel
echo gettype($nome_variavel); // <--printar a variavel na tela (boolean)

echo'<br>';

$nome_variavel = 0; // <--como definir variavel
echo gettype($nome_variavel); // <--printar a variavel na tela (boolean)

echo'<br>';

$nome_variavel = []; // <--como definir variavel
echo gettype($nome_variavel); // <--printar a variavel na tela (array = matriz/vetor)

echo'<br>';

$nome_variavel = new StdClass; // <--como definir variavel
echo gettype($nome_variavel); // <--printar a variavel na tela (object)

echo '<br>';

//CONSTANTES

define('SERVIDOR', 'localhost');
define('PORTA', 3306);

echo '<br>';

echo SERVIDOR;

define('SERVIDOR', 'localhost'); //NAO DA PRA REDEFINIR CONSTANTE
define('PORTA', 3306);

$cores = ['branco', 'vermelho', 'preto'];

echo '<br>';

var_dump($cores);

// echo $cores;

echo '<br>';

$pessoas = [
    'nome' => 'william',
    'sala' => 10,
    'materia' => 'estrutura de dados'
];

var_dump($pessoas);

echo '<br>';

echo $pessoas['nome'];
echo $pessoas['sala'];
echo $pessoas['materia'];
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