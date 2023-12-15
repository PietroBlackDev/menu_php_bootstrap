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

    $diretorio = './cadastro';

    $recurso = opendir($diretorio);

    while ($file = readdir($recurso)) {
        if ($file == '.' || $file == '..') {

            continue;
        }
        $caminho = './cadastro/' . $file;
        echo "filename: $file <br>";
        $resource = fopen("./cadastro/$file", 'r');

        $dados = fread($resource, filesize($caminho));

        $cliente = json_decode($dados, true);

        $arrayClientes[] = $cliente;

        fclose($resource);
    }
    
    closedir($recurso);

    ?>



    <a href="novo_dado.php">NOVO CADASTRO</a>

    <table>
        <thead>
            <TR>
                <th>NOME</th>
                <th>CÓDIGO</th>
            </TR>
        </thead>
        <TBODy>
        <?php foreach ($arrayClientes as $clientes):?>
                    <tr>
                        <td><?= $clientes['nome'] ?></td>
                        <td><?= $clientes['codigo'] ?></td>
                    </tr>
        <?php endforeach; ?>
        </TBODy>
    </table>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>