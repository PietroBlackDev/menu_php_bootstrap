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
$i = 0;
while ($i <= 10) {
   echo $i ++;
}

echo '<br>';
echo '<h1>TABUADA DO 2</h1>';


$tabuada = 2;
for ($i=0; $i <= 10; $i++) { 
    echo $tabuada . 'x' . $i . '=' . ($tabuada*$i) . '<br>';
}

echo '<br>';
echo '<h1>TABUADA DO 0 AO 100</h1>';

$tabuada = 0;
for ($tabuada=0; $tabuada <= 100; $tabuada++) { 

    for ($i=0; $i <= 10 ; $i++) { 
        echo  '<br>' . $tabuada . 'x' . $i . '=' . ($tabuada*$i);
    }
    echo '<br>';

}

echo '<br>';
echo '<h1>TABUADA DO 0 AO 100 SOMENTE IMPARES</h1>';

$tabuada = 1;
for ($tabuada=1; $tabuada < 100; $tabuada+=2) { 

    for ($i=0; $i <= 10 ; $i++) { 
        echo  '<br>' . $tabuada . 'x' . $i . '=' . ($tabuada*$i);
    }
    echo '<br>';

}

echo '<br>';

$entrada = 553;
$sobra = 0;

if ($entrada >= 100) {
    $sobra = $entrada%100;
    echo $sobra . '<br>';

    if ($sobra >= 50) {
        $sobra = $sobra%50;
        echo $sobra . '<br>';
    }

    if ($sobra >= 25) {
        $sobra = $sobra%25;
        echo $sobra . '<br>';
    }

    if ($sobra >= 10) {
        $sobra = $sobra%10;
        echo $sobra . '<br>';
    }

    if ($sobra >= 05) {
        $sobra = $sobra%05;
        echo $sobra . '<br>';
    }

    if ($sobra >= 02) {
        $sobra = $sobra%02;
        echo $sobra . '<br>';
    }

    if ($sobra >= 01) {
        $sobra = $sobra%01;
        echo $sobra . '<br>';
    }

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