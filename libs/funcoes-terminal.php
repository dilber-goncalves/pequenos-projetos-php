<?php
function quebraLinha(){
    echo PHP_EOL;
    echo "|=====================================================|";
    echo PHP_EOL;
}

function ler_input($texto){
    echo $texto;
    global $fin;
    $input = fgets($fin);
    $input = rtrim($input, "\n\r");
    return $input;
}
?>