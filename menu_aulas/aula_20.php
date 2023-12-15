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

if(isset($_POST['codigo']) || isset($_POST['descricao'])) { //isset verifica se a variavel esta definida.
    $msg = '';
    if(strlen($_POST['codigo']) == 0) {  //strlen = quantidade de caracteres
        $msg .= 'Informe o codigo<br>';
    } elseif(strlen($_POST['descricao']) == 0) {
        $msg .= 'Informe a descrição<br>';
    }
    if (is_int($_POST['codigo']) == false) {
        $msg .= 'O codigo tem que ser numero!<br>';
    }
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];

if ($msg != '') :
    echo $msg;
endif;

$json = json_encode($_POST);

define('DIRETORIO_CADASTRO', './grave/cadastro');

if (!file_exists(DIRETORIO_CADASTRO))
    mkdir(DIRETORIO_CADASTRO);

// 1- abre o arquivo
$recurso = fopen(DIRETORIO_CADASTRO . "/cliente-" . $codigo . ".json", 'w');

// 2- escrevo no arquivo
fwrite($recurso, $json);

// 3- fecho o arquivo
fclose($recurso);

define('DIRETORIO_CLIENTES', './grave/cadastro');

if (!file_exists(DIRETORIO_CLIENTES))
    mkdir(DIRETORIO_CLIENTES);

// 1- abre o arquivo
$recurso = fopen(DIRETORIO_CLIENTES . "/clientes.json", 'a');

// 2- escrevo no arquivo
fwrite($recurso, $json);

// 3- fecho o arquivo
fclose($recurso);

}

?>

<form action="" method="post">
<label for="codigo">Digite um código:</label>
<input type="text" name="codigo" ><br><br>
<label for="descricao">Descrição:</label>
<input type="text" name="descricao"><br><br>
<button type="submit">Gravar</button>
</form>


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