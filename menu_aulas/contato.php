<?php

//$nome = $_GET['nome'];

//$nome = $_POST['nome'];

//$nome = $_REQUEST['nome'];

$nome = isset($_GET['nome']) ? $_GET['nome'] : 'Não existe';
$email = isset($_GET['email']) ? $_GET['email'] : 'Não existe';
$data = isset($_GET['data']) ? $_GET['data'] : 'Não existe';
$cep = isset($_GET['cep']) ? $_GET['cep'] : 'Não existe';
$bairro = isset($_GET['bairro']) ? $_GET['bairro'] : 'Não existe';
$rua = isset($_GET['rua']) ? $_GET['rua'] : 'Não existe';
$casa = isset($_GET['casa']) ? $_GET['casa'] : 'Não existe';

echo "$nome <br>";
echo "$email <br>";
echo "$data <br>";
echo "$cep <br>";
echo "$bairro <br>";
echo "$rua <br>";
echo "$casa <br>";