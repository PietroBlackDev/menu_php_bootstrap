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
include 'include/inc_header.php';
echo "<h1>DIA DE PROVA</h1><br>";

echo "NOMES: Henrique Silva Ribeiro <br> Pietro Ricardo Black Fracalanza Muzy <hr>";

$alunos = [];

$aluno1 = [
    "nome" => "WILSON",
    "idade" => 25,
    "periodo" => 1,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 3,
            "P2" => 5,
            "P3" => 1,
            "P4" => 3
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 1,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno1;

$aluno2 = [
    "nome" => "MARIA",
    "idade" => 27,
    "periodo" => 1,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 3,
            "P2" => 5,
            "P3" => 1,
            "P4" => 3
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 1,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno2;

$aluno3 = [
    "nome" => "JOANA",
    "idade" => 23,
    "periodo" => 2,
    "matematica" =>[
        "peso" => 2,
        "avaliacao" =>[
            "P1" => 1,
            "P2" => 1,
            "P3" => 1,
            "P4" => 5
        ]
    ],
    "portugues" =>[
        "peso" => 4,
        "avaliacao" =>[
            "P1" => 2,
            "P2" => 2,
            "P3" => 2,
            "P4" => 3
        ]
    ],
];
$alunos[] = $aluno3;

$numero_alunos = 0;
$soma1 = 0;
$soma_notas = 0;
$disciplinas = [];
$soma_idade = 0;
$notas_mat = [];
$notas_port = [];
$peso_mat = [];
$peso_port = [];
$numero_ava = 4;
$aluno = 0;
$soma_mat = 0;
$media_mat = 0;
$soma_port = 0;
$media_port = 0;

// Exercício 1

    //O uso do "Else" em uma estrutura IF se restringe a quando há somente duas opções para um resultado. No caso, o resultado será um ou outro. Ex: 
    // if(condicao){
    //  }else{
    //      }

    //O "ElseIf" em uma estrutura IF é usado no caso de ter mais de duas opções para um resultado acontecer. O resultado pode ser um, mas se não for, pode ser outro, e se não for nenhum dos dois, outro, e assim por diante havendo uma condição entre eles.
    //Ex: if(condicao){
    //      }elseif(outra condicao){
    //          }

// Exercício 2

        //Usamos && (AND) quando, para executar um comando, todas as condições na estrutura IF forem VERDADEIRAS.
        //Ex: if(V && V){
        //      comando }

        //Usamos || (OR) quando, para executar um comando, apenas uma condição da estrutura IF precisa ser VERDADEIRA.
        //Ex: if(V || F){
        //      comando}

// Exercício 3
        foreach ($alunos as $estudante) {
            $numero_alunos++;
            $soma_idade = $soma_idade + $estudante['idade'];
        }
        $media_idade = $soma_idade / $numero_alunos; 
        echo "A média de idade dos alunos é de $media_idade anos <br>";

// Exercício 4 e Exercício 5
        foreach ($alunos as $estudante){
                $aluno = $estudante['nome'];
                $notas_mat = $estudante['matematica']['avaliacao'];
                $notas_port = $estudante['portugues']['avaliacao'];
                $peso_mat = $estudante['matematica']['peso'];
                $peso_port = $estudante['portugues']['peso'];

            foreach ($notas_mat as $mat) {
                $soma_mat += $mat;
                $media_mat = ($soma_mat * $peso_mat) / $numero_ava;
            }

            foreach ($notas_port as $port) {
                $soma_port += $port;
                $media_port = ($soma_port * $peso_port) / $numero_ava;
            }

            if ($media_mat >= 5) {
                echo "O $aluno foi Aprovado com SUCESSO em matematica! <br>";
            }
            else {
                echo "O $aluno foi Reprovado em matematica! <br>";
            }

            if ($media_port >= 5) {
                echo "O $aluno foi Aprovado com SUCESSO em portugues! <br>";
            }
            else {
                echo "O $aluno foi Reprovado em portugues! <br>";
            }

            echo "A Media do $aluno em Matematica é $media_mat e em Portugues é $media_port <br>";
            $soma_mat = 0;
            $soma_port = 0;

            $media_port = 0;
        }
        



// 1 - DESCREVA QUANDO PODEMOS USAR "ELSE" OU "ELSEIF" EM UMA INSTRUÇÃO IF
// 2 - DESCREVA CASOS DE USO PARA "&&" (AND) E "||" (OR) NA INSTRUÇÃO IF
// 3 - EXIBA MÉDIA DE IDADE DOS ALUNOS
// 4 - QUAL FOI A MÉDIA POR ALUNO E POR MATÉRIA, LEVANDO EM CONSIDERAÇÃO O PESO
// 5 - ALUNOS REPROVADOS E APROVADOS, COM BASE NA MÉDIA 5.0
?>

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
