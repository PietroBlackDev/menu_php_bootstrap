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
// FOREACH

$ArrayVazio = []; //array vazio

$numeros = [12, 55, 1, 234, 356]; //elementos do mesmo type

$frutas = ['banana', 'abacaxi', 'laranja']; //elementos do mesmo type

$ArrayMisto = [ 11, 'joão', False]; //elementos de diferentes types
echo $ArrayMisto[1] . $ArrayMisto[0] . $ArrayMisto[2] . '<br>';

$ArrayMisto[1] = 'MARIA';
echo $ArrayMisto[1] . $ArrayMisto[0] . $ArrayMisto[2] . '<br>';

$ArrayMisto[5] = 6666;
echo $ArrayMisto[5] . '<br>';

echo '<pre>';
var_dump($ArrayMisto);
echo '</pre>';

echo '<br>';

$resultado = 0;
$numeros = [12, 55, 1, 234, 356]; //elementos do mesmo type
foreach ($numeros as $valor) {
    
    $resultado = $resultado + $valor;
}
    echo 'O resultado da soma do valor dos elementos é: ' . $resultado . '<br>';


$numeros = [12, 55, 1, 234, 356]; //elementos do mesmo type
foreach ($numeros as $valor) {

    if ($valor%2 == 0) {
        echo 'O valor ' . $valor . ' é Par' . '<br>';
    }
    else{
        echo 'O valor ' . $valor . ' é impar' . '<br>';
    }

}

echo '<br>';

$letras = ['M', 'F', 'F', 'F', 'M', 'N/C', 'A'];
$quantidadeF = 0;
$quantidadeM = 0;
$quantidadeN = 0;
 
foreach ($letras as $value) {
    if ($value == 'M') 
        $quantidadeM++;
    elseif ($value == 'F') 
        $quantidadeF++;
    else 
        $quantidadeN++;
}

echo "No array tem $quantidadeM de Masculinos <br>";
echo "No array tem $quantidadeF de Femininos <br>";
echo "No array tem $quantidadeN de Não Binarios <br>";

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