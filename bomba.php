<?php
$fin = fopen("php://stdin", "r");

    echo PHP_EOL;
    echo "!!!CUIDADO COM A BOMBA!!!\n";
    echo PHP_EOL;
    echo "Digite em quantos segundos a bomba explodirá: ";
    $tempo = fgets($fin);
    $tempo = rtrim($tempo, "\n\r");
     while ($tempo >= 1){
        echo $tempo--;
        sleep(1);
        echo PHP_EOL;
    }
    
    echo "BOOOMM!!!";
    echo PHP_EOL;
   
?>