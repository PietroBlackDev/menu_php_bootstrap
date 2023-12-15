<?php

function DateBrToIng($value)
{
    $arrayData = explode('/', $value);
    return $arrayData[2] . '-' . $arrayData[1] . '-' . $arrayData[0];
}

function DateIngToBr($value)
{
    $arrayData = explode('-', $value);
    return $arrayData[2] . '/' . $arrayData[1] . '/' . $arrayData[0];
}


$nome = strtoupper(trim($_POST['nome']));
$email = $_POST['email'];
$idade = $_POST['idade'];
$data = $_POST['data_nascimento'];
$uf = $_POST['uf'];
$faculdade = $_POST['possui_faculdade'];
$linguagem[] = $_POST['linguagens'];
$msg = '';
$sexo = $_POST['sexo'];


//Validação Nome
if ($nome == '') :
    $msg .= 'Informe o Nome<br>';
endif;

//Validação Data de nascimento
if (strlen($data) == 0){
    $msg .= 'Informe a sua data de nascimento<br>';
}

//Validação Idade
if (!is_numeric($idade)) :
    $msg .= 'Informe a Idade<br>';
endif;

//Validação E-mail
if ($email == '') :
    $msg .= 'Informe o E-mail<br>';
endif;

//Validação Sexo
if (!isset($_POST['sexo'])) {
    $msg .= 'Informe a sua sexualidade<br>';
}

//Validação estado de nascimento
if (strlen($uf) == 0){
    $msg .= 'Informe seu estado de nascimento<br>';
}

//Validação faculade
if (!isset($_POST['possui_faculdade'])){
    $msg .= 'Informe se possui faculdade!<br>';
}

//Validação Linguagem
// if (!isset($_post['linguagens'])) {
// $msg .= 'Informe uma Linguagem<br>';
//     // foreach ($linguagem as $linguas) {
//     //     $linguas = $linguas + $linguagem;
//     // }

//     // $linguas = (count($linguas));
//     // if ($linguas = '') {
//     //     $msg .= 'informe uma linguagem<br>';
//     // }
//}

if ($msg != '') :
    echo $msg;
    exit;
endif;

echo '<pre>';

$cliente = [
    'nome' => $nome,
    'data_nascimento' => $data,
    'idade' => $idade,
    'email' => $email,
    'sexo' => $sexo,
    'estado' => $uf,
    'faculdade' => $faculdade,
    'linguagens' => $linguagem
];

echo json_encode($cliente); //era so dar um $_post no lugar do $cliente BURRO
