<?php

//$nome = $_GET['nome'];

//$nome = $_POST['nome'];

//$nome = $_REQUEST['nome'];

$nome = isset($_GET['nome']) ? $_GET['nome'] : 'Não existe';
$email = isset($_GET['email']) ? $_GET['email'] : 'Não existe';
$data = isset($_GET['data']) ? $_GET['data'] : 'Não existe';
$cep = isset($_GET['cep']) ? $_GET['cep'] : 'Não existe';
$termos = isset($_GET['termos']) ? $_GET['termos'] : 'Não existe';
$cor = isset($_GET['cor']) ? $_GET['cor'] : 'Não existe';
$datatime = isset($_GET['datatime']) ? $_GET['datatime'] : 'Não existe';
$file = isset($_GET['file']) ? $_GET['file'] : 'Não existe';
$datamonth = isset($_GET['datamonth']) ? $_GET['datamonth'] : 'Não existe';
$senha = isset($_GET['senha']) ? $_GET['senha'] : 'Não existe';
$selecao = isset($_GET['selecao']) ? $_GET['selecao'] : 'Não existe';
$range = isset($_GET['range']) ? $_GET['range'] : 'Não existe';
$procura = isset($_GET['procura']) ? $_GET['procura'] : 'Não existe';
$telefone = isset($_GET['telefone']) ? $_GET['telefone'] : 'Não existe';
$horas = isset($_GET['horas']) ? $_GET['horas'] : 'Não existe';
$site = isset($_GET['site']) ? $_GET['site'] : 'Não existe';
$semana = isset($_GET['semana']) ? $_GET['semana'] : 'Não existe';

echo "$nome <br>";
echo "$email <br>";
echo "$data <br>";
echo "$cep <br>";
echo "$termos <br>";
echo "$cor <br>";
echo "$datatime <br>";
echo "$file <br>";
echo "$datamonth <br>";
echo "$senha <br>";
echo "$selecao <br>";
echo "$range <br>";
echo "$procura <br>";
echo "$telefone <br>";
echo "$horas <br>";
echo "$site <br>";
echo "$semana <br>";