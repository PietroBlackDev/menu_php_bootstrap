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


    // ESTUDAR TUDO ISSO!!!!
    // 1- Formularios HTML
    // 2- Recebendo Get e POST
    // 3- Validação com php
    // 4- criando json com php
    // 5- escrevendo arquivos com php
    // 6- lendo arquivos com php
    // 7- listando arquivos da pasta
    // 8- parametros via url
    // 9- código php com html
    // 10- redirecionamento com php

    //LENDO ARQUIVOS COM PHP

    $nome_arquivo = './grave/cadastro/cliente-pi.json';

    function ler_arquivos($nome_arquivo)
    {
        $resource = fopen('./grave/cadastro/cliente-pi.json', 'r');

        $dados = fread($resource, filesize($nome_arquivo));

        fclose($resource);

        return $dados;
    }
    // $cliente = json_decode(ler_arquivos($nome_arquivo));
    $arquivo = ler_arquivos($nome_arquivo);
    $cliente = json_decode($arquivo);

    echo $cliente->codigo . '<br>';

    function escrever_arquivos($escrita)
    {
        $resource = fopen('./grave/cadastro/cliente-pi.json', 'w');
        fwrite($resource, $escrita);
        fclose($resource);
    }


    // LISTA ARQUIVOS
    $diretorio = './grave/cadastro';

    $resource = opendir($diretorio);

    while ($file = readdir($resource)) {
        echo "filename: $file <br>";
    }

    closedir($resource);


    //PARAMETROS VIA URL

    //http://localhost/menu_aulas/aula_21.php?nome=maria&idade=29
    ?>

    <button>
        <a href="http://localhost/menu_aulas/aula_21.php?nome=maria&idade=29"> CLICA AQUI CARAIO</a>
    </button>

    <?php

    $variavel1 = isset($_GET['nome']) ? $_GET['nome'] : '';
    $variavel2 = isset($_GET['idade']) ? $_GET['idade'] : '';

    $cliente1 = [
        'nome' => 'João',
        'idade' => 23
    ];
    $arrayClientes[] = $cliente1;

    $cliente2 = [
        'nome' => 'Maria',
        'idade' => 33
    ];
    $arrayClientes[] = $cliente2;

   // header('location: aula_21_C.php');
    ?>

    <h1><?= $variavel1 ?></h1>
    <h1><?= $variavel2 ?></h1>

    <hr>
    <table>
        <thead>
            <TR>
                <th>NOME</th>
                <th>IDADE</th>
            </TR>
        </thead>
        <TBODy>
                <?php foreach ($arrayClientes as $cliente):?>
                    <tr>
                        <td><?= $cliente['nome'] ?></td>
                        <td><?= $cliente['idade'] ?></td>
                    </tr>
                <?php endforeach; ?>
        </TBODy>
    </table>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>