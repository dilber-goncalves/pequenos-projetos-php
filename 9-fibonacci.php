<<?php 
    $contador = 0;
    $resposta = 1;
    $valorAnterior = 1;
    $qntRepeticoes = 15;

    do{
        echo $resposta.". ";
        $resposta = $valorAnterior + $resposta;
        $valorAnterior = $resposta - $valorAnterior;        
        $contador++;
    }while($contador < $qntRepeticoes);
    echo ". .";
?>