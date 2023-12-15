<?php

//FUNÇÃO PARA LER ARQUIVOS
$nome_arquivo ='./grave/cadastro/cliente-pi.json';

function ler_arquivos($nome_arquivo)
{
$resource = fopen('./grave/cadastro/cliente-pi.json', 'r');

$dados = fread($resource, filesize($nome_arquivo));

fclose($resource);

return $dados;
}
// echo ler_arquivos($nome_arquivo);

//----------------------------------------------------------------------------------------------------------------------

//FUNÇÃO PARA ESCREVER ARQUIVOS 
function escrever_arquivos($escrita)
{
    $resource = fopen('./grave/cadastro/cliente-pi.json', 'w');
    fwrite($resource, $escrita);
    fclose($resource);
}
// echo escrever_arquivo('teste');

//----------------------------------------------------------------------------------------------------------------------

//FUNÇÃO PARA TRANSFORMAR NUMERO DA SEMANA EM DIA DA SEMANA
function retorna_semana($numero_semana)
{
    $semana = [
        'DOMINGO',
        'SEGUNDA-FEIRA',
        'TERÇA-FEIRA',
        'QUARTA-FEIRA',
        'QUINTA-FEIRA',
        'SEXTA-FEIRA',
        'SABADO'
    ];
    return $semana[$numero_semana - 1];
}

//----------------------------------------------------------------------------------------------------------------------

//FUNÇÃO DE PORCENTAGEM COM REGRINHA DE 3
function porcentagem_regra3($parcial, $total)
{
    return ($parcial * 100) / $total;
}

//----------------------------------------------------------------------------------------------------------------------

//FUNÇÃO QUE TRANSFORMA DATA GRINGA EM BR
function data_brasileira($value)
{
    $arraydata = explode('-', $value);
    return $arraydata[2] . '/' . $arraydata[1] . '/' . $arraydata[0];
}

//----------------------------------------------------------------------------------------------------------------------

//FUNÇÃO QUE TRANSFORMA DATA BR EM GRINGA
function data_universal($value)
{
    $arraydata = explode('/', $value);
    return $arraydata[2] . '-' . $arraydata[1] . '-' . $arraydata[0];
}

//----------------------------------------------------------------------------------------------------------------------
