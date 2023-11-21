<?php

echo "<h1> Exercício 1 </h1>"; 

$saldo_inicial_corrente = 1000;
$saldo_inicial_poupanca = 500;

$movimentacoes = [];

$movimentacao = [
    "tipo" => "CRÉDITO",
    "conta"=> "CORRENTE",
    "valor_movimento" => 100
];

$movimentacoes[] = $movimentacao;


$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "POUPANÇA",
    "valor_movimento" => 50
];

$movimentacoes[] = $movimentacao;


$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "POUPANÇA",
    "valor_movimento" => 500
];

$movimentacoes[] = $movimentacao;


$movimentacao = [
    "tipo" => "DÉBITO",
    "conta"=> "CORRENTE",
    "valor_movimento" => 10
];

$movimentacoes[] = $movimentacao;

$movimento=0;
$total_debito=0;
$total_credito=0;

if ($saldo_inicial_corrente < 0){
        echo "CONTA-CORRENTE BLOQUEADA <br>";
    }else{
        echo "CONTA POUPANÇA BLOQUEADA <br>";
    }
foreach ($movimentacoes as $elemento) {
    
    if ($elemento['valor_movimento'] >= 1) {
        $movimento++;
    }

   if ($elemento['conta'] == 'CORRENTE') {
        $saldo_inicial_corrente = $saldo_inicial_corrente - $elemento['valor_movimento'];
    }elseif ($elemento ['conta'] == 'POUPANÇA'){
       $saldo_inicial_poupanca = $saldo_inicial_poupanca - $elemento['valor_movimento'];
   }
  
   if ($elemento['tipo'] == 'DÉBITO') {
        $total_debito = $total_debito + $elemento['valor_movimento'];
   }else{
        $total_credito = $total_credito + $elemento['valor_movimento'];
   }

}
echo "O saldo da conta corrente foi de: $saldo_inicial_corrente <br>";
echo "O saldo da poupança foi de: $saldo_inicial_poupanca <br>";
echo "Quantidade de movimentos foi de $movimento <br>";
echo "A quantidade de operações com débito foi de R$ $total_debito <br>";
echo "A quantidade de operações com crédito foi de R$ $total_credito <br>";


//Lider: Pietro
//Analista: Henrique
//Programador: Gabriel