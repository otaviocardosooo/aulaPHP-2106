<?php 
// Declarando variáveis 
$nome = 'Palio';
$preco_fabrica = 10000;

// Processamento
$imposto = ($preco_fabrica*37)/100;
$revendedor = ($preco_fabrica*22)/100;
$preco_total = $preco_fabrica+$imposto+$revendedor;

// Imprimindo resultados
echo 'O carro '.$nome .' custa $'.$preco_total;
?>