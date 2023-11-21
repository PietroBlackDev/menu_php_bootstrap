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
echo '<br>';

echo '<h1> Aula de While </h1>'; // enquanto a condição for verdadeira

echo '<br>';

$i = 0;
while ($i <= 10) {
    echo $i++;
}

echo '<br>';

$parcelas = 6;
$contador = 1;
$parcelas_pagas = 3;

while ($contador <= $parcelas) {

    if ($contador <= $parcelas_pagas){
        echo "Parcela: {$contador} - PAGO <br>";
    }

    elseif ($contador == 5) {
        echo "Parcela {$contador} - ABONADA <br>";
    }

    else{
    echo "Parcela: {$contador} - EM ABERTO <br>";
    }

    $contador++;
}

echo '<br>';

$fim = false;
$comissao = 0;

while ($fim == false) {

    $comissao += 10;
    echo $comissao . '<br>';

    if ($comissao == 1000) {
        $fim = true;
    }

}

echo '<br>'; 

$contador = 1;

while ($contador <= 10) {
    echo "contador $contador <br>";

    if ($contador == 5) {
        $contador+=3;
    }
    
    $contador++;
}

echo '<br>'; 

$contador = 1;

while ($contador <= 10) {

    if ($contador < 6 or $contador >=9) {
        echo "contador $contador <br>";
    }
    
    $contador++;
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