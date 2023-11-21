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
//Aprendizado das aulas
// 1- Sintaxe
// 2- Tipagem
// 3- Variavéis
// 4- Condicional
// 5- Laços de Repetição
// 6- Arrays
// 7- Funçoes
// 8- POO (Programação Orientada a Objetos)

$media = 5;
$aluno = 'Pietro';
$ano = 2023;

if ($media>=6):
    echo 'aprovado';
else:
    echo 'reprovado';
endif;

echo '<br>';

if ('5' === $media):
    echo 'igual';
else:
    echo 'diferente';
endif;

echo '<br>';

// && uma expressao errada, já para
if ($media >= 5 && $aluno == 'Pietro' && $ano == 2023):
    echo 'aprovado';
else:
    echo 'reprovado';
endif;

echo '<br>';

// or uma expressão verdadeira, ja é o suficiente para aceitar
if ($media >= 6 or $aluno == 'Pietro'):
    echo 'aprovado';
else:
    echo 'reprovado';
endif;

echo '<br>';

$estorou_em_falta = true;

// ! é NOT
if(!$estorou_em_falta && $media >=6):
    if ($aluno == 'Pietro'): 
        echo 'aprovado';
    endif;
else:
    echo 'reprovado';
endif;

echo '<br>';

// Exemplo de NOT e Arrays
$registros = [];

if (!empty($registros)):
    echo 'USUARIO ENCONTRADO';
else:
    echo 'USUARIO NAO ENCONTRADO';
endif;

echo '<br>';

if ($media >= 6 && $aluno == 'Pietro'):
    echo 'aprovado';
elseif($media == 5 && $aluno == 'Pietro'):
    echo 'exame';
else:
    echo 'Reprovado';
endif;

echo '<br>';

$sigla = 'J';
if ($sigla = 'J'):
    echo 'JANEIRO';
elseif($sigla = 'F'):
    echo 'FEVEREIRO';
elseif($sigla = 'M'):
    echo 'MARÇO';
elseif($sigla = 'A'):
    echo 'ABRIL';
endif;

echo '<br>';

switch ($sigla):
    case 'J':
        echo 'JANEIRO';
        break;

    case 'F':
        echo 'FEVEREIRO';
        break;
    
    case 'M':
        echo 'MARÇO';
        break;
    
    default:
        echo 'Mês nao encontrado';
        break;
endswitch;

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