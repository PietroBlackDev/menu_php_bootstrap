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

    define('DIRETORIO_CADASTRO', './cadastro');

    $codigo = rand(1000, 9999);

    $cliente =
        [
            'id' => $codigo,
            'hash' => md5($codigo),
            'nome' => 'joao',
            'endereco' => 'Rua XXXX',
            'numero' => 43,
            'linguagens' => ['PHP', 'JS', 'JAVA']
        ];

    $json = json_encode($cliente);


    if (!file_exists(DIRETORIO_CADASTRO))
        mkdir(DIRETORIO_CADASTRO);

    // 1- abre o arquivo
    $recurso = fopen(DIRETORIO_CADASTRO . "/cliente-" . $cliente['id'] . ".json", 'w');

    // 2- escrevo no arquivo
    fwrite($recurso, $json);

    // 3- fecho o arquivo
    fclose($recurso);






    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>