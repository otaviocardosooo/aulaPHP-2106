<?php 
// Declarando variáveis
$n1 = 10;
$n2 = 8;
$n3 = 5;

// Processamento
$maior = $n1;

if ($n2 > $maior) {
    $maior = $n2;
};
if ($n3 > $maior) {
    $maior = $n3;
};

// Imprimindo resultado
echo $maior;
?>