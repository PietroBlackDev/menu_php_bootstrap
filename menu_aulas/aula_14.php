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

echo "<h2> Aula 14 de formularios </h2>";

//Verbos HTTP
//GET
//POST
//PUT
//PATCH
//DELETE
//OPTIONS

?>
<div class="container text-center">
<form action="contato.php" method="get">

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
    <label for="cep">Cep</label>
    <input type="numer" name="cep" required>
    </div>
    </div>

    <div class="row">
    <div class="col-5 text-start">      
    <label for="bairro">Bairro:</label>
    <input type="text" name="bairro" required>
    </div>

    <div class="col-7 text-start">
    <label for="rua">Rua:</label>
    <input type="text" name="rua" required>
    </div>
    </div>

    <div class="row">
    <div class="col-3 text-start">      
    <label for="casa">Casa:</label>
    <input type="number" name="casa" required>
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