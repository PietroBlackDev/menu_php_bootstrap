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

 echo "<h1> Aula de função 2 </h1>";

$cidade = 'São Roque';

$novo_valor = str_replace(['o' , 'e'], '1', $cidade);

echo $novo_valor;

echo "<br>";

$nome = 'Pietro                       ';

echo trim($nome);

echo "<br>";

$x = '0';

//if(empty($x))
if($x == ''){
    echo 'vazio';
}
else{
    echo 'tem valor';
}

echo "<br>";

$nome = 'Pietro';
if(strpos($nome, 'P') !== false){
    echo 'encontrou!';
}
else{
    echo 'nao encontrou';
}

echo "<br>";

//chunk_split($str, 3) ."\n";

$texto = 'pietro';

echo chunk_split($texto, 1);

echo "<br>";

//bin2hex(string $string): string

$hex = bin2hex('pietro');

echo($hex);

echo "<br>";

//str_repeat(string $string, int $times): string

echo str_repeat("eu te amo", 3);

echo "<br>";

//ucfirst(string $string): string

$nome = 'pietro';
$nome = ucfirst($nome);

echo $nome;

echo "<br>";

//max

echo max([2, 4, 5, 10, 9, 25, 48]);

echo "<br>";

//ceil(int|float $num): flutuar

$num = 12.325452;

echo ceil($num);









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