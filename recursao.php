<?php
function exibeNumero($numero){
    echo $numero;
    echo PHP_EOL; 
    if($numero > 0){
        exibeNumero($numero-1); 
    }
}
exibeNumero(10);

?>