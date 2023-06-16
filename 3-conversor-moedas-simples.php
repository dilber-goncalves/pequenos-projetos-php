<?php
//Fazer um conversor de moedas
$stdin = fopen("php://stdin", "r");

echo "Digite o valor em R$: ";
$valorDigitado = fgets($stdin);
$valorDigitado = rtrim($valorDigitado, "\n\r");
$valoremDolar = ($valorDigitado / 5.15);
$valoremDolar = number_format($valoremDolar, 2, '.', '');

echo "O valor de R$ $valorDigitado vale U$ $valoremDolar\n";
?> 