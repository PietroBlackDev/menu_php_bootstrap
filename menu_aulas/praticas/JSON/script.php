<?php

$hostname = "localhost";
$bancodedados = "cadastro";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno. ") " . $mysqli->connect_error;
} 

$sql = "SELECT * FROM gafanhotos";
$resultados = $mysqli->query($sql);

while($gafanhoto = $resultados->fetch_assoc()){
    $gafanhotos[] = $gafanhoto;
}

$encoded_data = json_encode($gafanhotos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('data.json', $encoded_data);