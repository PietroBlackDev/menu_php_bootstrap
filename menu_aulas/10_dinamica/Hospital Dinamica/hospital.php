<?php

$pacientes = [];

$paciente = [
    "nome" => "JOÃO",
    "sexo" => "M",
    "idade" => 34,
    "sintomas" => "Dor de Garganta",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "JOANA",
            "data_hora" => "23/10/2023 12:00:34"
        ],
        [
            "departamento" => "TRIAGEM",
            "responsavel" => "PEDRO",
            "data_hora" => "23/10/2023 12:10:55"
        ],
        [
            "departamento" => "CONSULTA",
            "responsavel" => "DR. JAILSON",
            "data_hora" => "23/10/2023 12:56:15"
        ],
        [
            "departamento" => "ENFERMARIA",
            "responsavel" => "PAULA",
            "data_hora" => "23/10/2023 13:46:00"
        ],
    ]
];
$pacientes[] = $paciente;

$paciente = [
    "nome" => "MARIA",
    "sexo" => "F",
    "idade" => 44,
    "sintomas" => "Dor de Cabeça",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "PAULA",
            "data_hora" => "23/10/2023 13:00:34"
        ],
        [
            "departamento" => "TRIAGEM",
            "responsavel" => "KELLY",
            "data_hora" => "23/10/2023 13:10:55"
        ],
        [
            "departamento" => "CONSULTA",
            "responsavel" => "DR. MARCOS",
            "data_hora" => "23/10/2023 13:56:15"
        ]
    ]
];
$pacientes[] = $paciente;
$paciente = [
    "nome" => "MARIO",
    "sexo" => "M",
    "idade" => 24,
    "sintomas" => "Dor de Barriga",
    "fluxo" => [
        [
            "departamento" => "RECEPÇÃO",
            "responsavel" => "JOANA",
            "data_hora" => "23/10/2023 15:00:34"
        ]
    ]
];

$pacientes[] = $paciente;

$atendido = 0; $atendidos_J = 0; $atendidos_P = 0; $recepcao = 0; $consulta = 0; $enfermaria = 0;

foreach ($pacientes as $unidade) {

    foreach ($unidade['fluxo'] as $fluxo) {

        if($fluxo['departamento'] == "RECEPÇÃO"){
            $atendido++;
            if($fluxo['responsavel'] == "JOANA"){
                $atendidos_J++;
            }else{
                $atendidos_P++;
            }
        }

        if ($fluxo['departamento'] == "CONSULTA") {
            echo $unidade['nome'] . " passou com o " . $fluxo['responsavel'] . '<br>';
        }

        if ($fluxo['data_hora'] == "23/10/2023 15:00:34") {
            $recepcao++;
        }elseif($fluxo['data_hora'] == "23/10/2023 13:56:15"){
            $consulta++;
        }elseif ($fluxo['data_hora'] == "23/10/2023 13:46:00"){
            $enfermaria++;
        }
        
    }
}

echo "Neste hospital, $atendido pacientes foram atendidos. <br>";
echo "A atendente Joana atendeu $atendidos_J pacientes <br>";
echo "A atendente Paula atendeu $atendidos_P pacientes <br>";
echo "Há $recepcao paciente(s) parados na recepção <br>";
echo "Há $consulta paciente(s) parados na consulta médica <br>";
echo "Há $enfermaria paciente(s) parados na enfermaria";

//LÍDER: GABRIEL
//ANALISTA: PIETRO
//PROGRAMADOR: HENRIQUE