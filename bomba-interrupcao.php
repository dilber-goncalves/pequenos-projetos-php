<?php
$fin = fopen("php://stdin", "r");

    echo PHP_EOL;
    echo "!!!CUIDADO COM A BOMBA!!!\n";
    echo PHP_EOL;
    echo "Digite em quantos segundos a bomba explodirá: ";
    $tempo = fgets($fin);
    $tempo = rtrim($tempo, "\n\r");
    system('stty cbreak -echo');
    stream_set_blocking($fin, 0);
      while ($tempo >= 1){
          $keypress = fgets($fin);
        
          if($keypress == "\e"){
            echo "Contagem Interrompida\n";
            break;
          }

        echo $tempo--;
        sleep(1);
        echo PHP_EOL;
        }
          if($tempo <= 0){
            echo "BOOOMM!!!";
            echo PHP_EOL; 
          }
    system('stty cbreak echo');
?>
