<?php
//Informe um número e ele mostrará o número, o antecessor e o sucessor!
$stdin = fopen("php://stdin", "r");//standard input

echo "Digite um Número: \n";
$numero = fgets($stdin);
echo "O número digitado foi: $numero\n";
$numero = rtrim($numero, "\n\r");//tira o caracter do ENTER
echo "Seu sucessor é ".$numero + 1; 
echo " e seu antecessor é ".$numero - 1;
?> 