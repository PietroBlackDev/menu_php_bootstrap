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
    echo "<h1> Aula de Reposição </h1>";
?>

<div class="container text-center">
<form action="grave/contato.php" method="get">

    <div class="row">
    <div class="col-5 text-start">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>
    </div>

    <div class="col-7 text-start">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="data">Data:</label>
    <input type="date" name="data" required>
    </div>

    <div class="col-7 text-start">
    <label for="cep">Cep:</label>
    <input type="numer" name="cep" required>
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="Termos">Você concorda com os termos?</label>
    <input type="checkbox" name="termos" required>
    </div>

    <div class="col-7 text-start">
    <label for="cor">Escolha a Cor do seu Perfil</label>
    <input type="color" name="cor" required>
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="datatime">Data completa:</label>
    <input type="datetime-local" name="datatime" required>
    </div>

    <div class="col-7 text-start">
    <label for="file">Selecione o seu arquivo:</label>
    <input type="file" name="file">
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="esconda">Nada aqui:</label>
    <input type="hidden" name="esconda">
    </div>

    <div class="col-7 text-start">
    <label for="imagem">Uma imagem como botão</label>
    <input type="image" name="imagem">
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="datamonth">Data Menor:</label>
    <input type="month" name="datamonth" required>
    </div>

    <div class="col-7 text-start">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" required>
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="selecao">Botão de Seleção</label>
    <input type="radio" name="selecao" required>
    </div>

    <div class="col-7 text-start">
    <label for="range">defina sua felicidade:</label>
    <input type="range" name="range">
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="reset">Botão para resetar</label>
    <input type="reset" name="reset">
    </div>

    <div class="col-7 text-start">
    <label for="procura">O que procuras?</label>
    <input type="search" name="procura">
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="telefone">Insira seu telefone:</label>
    <input type="tel" name="telefone" required>
    </div>

    <div class="col-7 text-start">
    <label for="horas">Horario?</label>
    <input type="time" name="horas">
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">
    <label for="site">Insira seu perfil do linkedin</label>
    <input type="url" name="site" required>
    </div>

    <div class="col-7 text-start">
    <label for="semana">Semana?</label>
    <input type="week" name="semana">
    </div>
    </div>

    <div class="row">
    <button class="btn btn-dark" type="submit">Gravar</button>
    </div>

</form>
</div>

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