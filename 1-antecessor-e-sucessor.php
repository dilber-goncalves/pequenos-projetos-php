<?php
include "libs/funcoes-terminal.php";

//Informe um número e ele mostrará o número, o antecessor e o sucessor!
$fin = fopen("php://stdin", "r");//standard input

$numero = ler_input("Digite um número: \n");
echo "O número digitado foi: $numero\n";
$numero = rtrim($numero, "\n\r");//tira o caracter do ENTER
echo "Seu sucessor é ".$numero + 1; 
echo " e seu antecessor é ".$numero - 1;
?> 