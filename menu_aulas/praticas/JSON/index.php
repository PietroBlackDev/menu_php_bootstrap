<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("script.php"); 

echo'<pre>';

$dadosjson = file_get_contents('data.json');

$dados_json_decode = json_decode($dadosjson, true);

foreach ($dados_json_decode as $gafanhoto) {
    echo $gafanhoto['id'] . ' - ' . $gafanhoto['nome'] . PHP_EOL;
}
    
?>
</body>
</html>



