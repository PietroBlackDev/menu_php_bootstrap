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
    <?php include 'include/inc_header.php'; ?>

    <form action="grave/gravar.php" method="post">
        <input type="text" name="nome" placeholder="Informe seu Nome"><br><br>
        <input type="date" name="data_nascimento"><br><br>
        <input type="number" name="idade" placeholder="Informe sua Idade"><br><br>
        <input type="email" name="email" placeholder="Informe seu E-mail"><br><br>
        <label>Informe o Sexo</label><br>
        <input type="radio" name="sexo" value="MASCULINO"> Masculino
        <input type="radio" name="sexo" value="FEMININO"> Feminino<br><br>
        <label>Informe o Estado</label><br>
        <select name="uf">
            <option value="">Selecione</option>
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="PR">PR</option>
        </select><br><br>
        <label for="possui_faculdade">
            <input type="checkbox" id="possui_faculdade" name="possui_faculdade" value="S"> Possui Faculdade
        </label><br><br>
        <p>Linguagens</p>
        <label for="php">
            <input type="checkbox" name="linguagens[]" id="php" value="php"> PHP
        </label>
        <label for="java">
            <input type="checkbox" name="linguagens[]" id="java" value="Java"> JAVA
        </label>
        <label for="c">
            <input type="checkbox" name="linguagens[]" id="c" value="c"> C# <br>
        </label>
        <button type="submit">Gravar</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>