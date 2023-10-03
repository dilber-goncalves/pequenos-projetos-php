<?php

include 'class_Vaca.php';
include 'class_Cavalo.php';
include 'class_Ovelha.php';

class Terminal{
    public function write($texto){
        echo $texto;
    }
    public function writeln($texto){
        echo $texto."\n";
    }
}

?>