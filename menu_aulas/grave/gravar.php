<?php
$data = $_POST['data_nascimento'];
echo "Data do Formulário: $data <br>";

function data_brasileira($value){
    $arraydata = explode('-', $value);
    return $arraydata[2] . '/' . $arraydata[1] . '/' . $arraydata[0];
}

function data_universal($value){
    $arraydata = explode('/', $value);
    return $arraydata[2] . '-' . $arraydata[1] . '-' . $arraydata[0];
}

$data = $_POST['data_nascimento'];

echo "data do formulario: $data <br>";

echo "data do formulario pos função: " . data_brasileira($data);

$nome = $_POST['nome'];

$msg = '';

if ($nome == ''){
    $msg = 'Informa o Nome<br>';
}

if ($email == ''){
    $msg .= 'Informa o Email<br>';
}

if (!is_numeric($idade)){
    $msg .= 'Informa o Idade<br>';
}

if ($msg != ''){
    echo $msg;
    exit;
}


