<?php
function buscar($array, $posiIni, $posiFin, $valor){
    echo "Buscar $posiIni e $posiFin\n";
    if($posiIni == $posiFin && $array[$posiIni] != $valor){
        return false;
    }
    $meio = floor(($posiIni + $posiFin) / 2);
    if($meio == -1){
        return false;
    }
    if($array[$meio] == $valor){
        return true;
    }
    if($array[$meio] > $valor){
        $posiFin = $meio -1;
        return buscar($array, $posiIni, $posiFin, $valor);
    }else{
        $posiIni = $meio +1;
        return buscar($array, $posiIni, $posiFin, $valor);
    }
}

function buscaBinaria($array, $valor){
    $posiIni = 0;
    $posiFin = count($array)-1;
    return buscar($array, $posiIni, $posiFin, $valor);   
}
?>