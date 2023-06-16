<?php
/* colocar input do numero para sortear*/

//números aleatórios utilizando RAND
//echo rand(1, 100);

//simulando um sorteio:
$fin = fopen ("php://stdin", "r");
echo "Digite seu numero da sorte: ";
$numero = fgets ($fin);

$numgerado
 = rand(1, 10);

if ($numgerado == $numero){
    echo "O número sorteado foi $numgerado. Você ganhou!\n";
}
else {
    echo "O número sorteado foi: $numgerado \n"; 
    echo PHP_EOL ;
    echo "Não foi dessa vez =( tente novamente \n";
}
?> 