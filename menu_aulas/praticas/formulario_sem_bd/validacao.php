<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Aula 01</title>
</head>

<body>
    <?php

    define('DIRETORIO_CADASTRO', './cadastro');

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $nome_arquivo = './cadastro/cliente-' . "$codigo" . '.json';
    $msg = '';

    if (strlen($nome) == 0) {
        $msg .= 'Informe o seu nome.<br>';
    }
    if (ctype_alpha($nome) == false) {
        $msg .= 'Por favor, insira apenas letras em seu nome.<br>';
    }
    if (strlen($codigo) == 0) {  //strlen = quantidade de caracteres
        $msg .= 'Informe o codigo<br>';
    }
    if (strlen($codigo) > 4) {
        $msg .= 'O codigo tem de ter apenas 4 digitos';
    }
    if (file_exists($nome_arquivo)) {
        $msg .= 'esse codigo ja existe, tente outro novamente.';
    }
    elseif (strlen($codigo) < 4) {
        $msg .= 'O codigo tem de ter apenas 4 digitos';
    } 
    elseif (strlen($descricao) == 0) {
        $msg .= 'Informe a descrição<br>';
    }
    if (is_int($codigo) != false) {
        $msg .= 'O codigo tem que ser numero!<br>';
    }

    if ($msg != '') :
        echo $msg;
        exit;
    endif;

    $json = json_encode($_POST);

    // 1- abre o arquivo
    $recurso = fopen(DIRETORIO_CADASTRO . "/cliente-" . $codigo . ".json", 'w');

    // 2- escrevo no arquivo
    fwrite($recurso, $json);

    // 3- fecho o arquivo
    fclose($recurso);

    $nome_arquivo = './grave/cadastro/cliente-' . $codigo . '.json';

    header('location: index.php');

    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>