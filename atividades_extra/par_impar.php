<?php 
// Declaração das variáveis 
$numero = 23;

// Processamento
$calculo = ($numero/2);

if (is_int($calculo)) {
    $resultado = 'par';
} else {
    $resultado = 'impar';
};

// Imprimindo resultado
echo $resultado;
?>