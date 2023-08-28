<?php 
//MergeSort 

function merge(&$array, $posiIni, $meio, $posiFin){
    $ponteiro1 = $posiIni;
    $ponteiro2 = $meio + 1;
    $arrayAux = array();

    while ($ponteiro1 <= $meio && $ponteiro2 <= $posiFin){
        if ($array[$ponteiro1] < $array[$ponteiro2]){
            $arrayAux[] = $array[$ponteiro1];
            $ponteiro1++;
        } else {
            $arrayAux[] = $array[$ponteiro2];
            $ponteiro2++;
        }
    }

    while ($ponteiro1 <= $meio){
        $arrayAux[] = $array[$ponteiro1];
        $ponteiro1++;
    }

    while ($ponteiro2 <= $posiFin){
        $arrayAux[] = $array[$ponteiro2];
        $ponteiro2++;
    }

    $ponteiroAux = 0;
    while ($ponteiroAux < count($arrayAux)) {
        $array[$posiIni + $ponteiroAux] = $arrayAux[$ponteiroAux];
        $ponteiroAux++;
    }
    }


function merge_sort(&$array, $posiIni, $posiFin){
    if ($posiIni < $posiFin) {
        $meio = floor(($posiIni + $posiFin) / 2);
        merge_sort($array, $posiIni, $meio);
        merge_sort($array, $meio+1, $posiFin);
        merge($array, $posiIni, $meio, $posiFin);
    }
    return $array;
}

//merge_sort($array, 0, count($array) -1);

/*$indice = 0;
if (count($array) > 0) { 
    echo "Numeros no array ordenado: ";
    while ($indice < count($array)) {
        echo $array[$indice]." ";
        $indice++;
    } 
}*/
?>