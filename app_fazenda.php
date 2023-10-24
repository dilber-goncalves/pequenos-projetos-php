<?php

include 'classes/Vaca.php';
include 'classes/Cavalo.php';
include 'classes/Ovelha.php';
include 'classes/Fazenda.php';

//Fazenda
$fazenda = new Fazenda;


//Cavalos
$cavalo1 = new Cavalo;
$cavalo1->cor = "preto";
$cavalo1->nome = "Alazão";
$fazenda->addAnimal($cavalo1);

$cavalo2 = new Cavalo;
$cavalo2->cor = "branco";
$cavalo2->nome = "Napoleão";
$fazenda->addAnimal($cavalo2);

$cavalo3 = new Cavalo;
$cavalo3->cor = "marrom";
$cavalo3->nome = "Pé de Pano";
$fazenda->addAnimal($cavalo3);

$cavalo4 = new Cavalo;
$cavalo4->nome = "Pangaré";
$fazenda->addAnimal($cavalo4);

//Vacas
$vaca1 = new Vaca;
$vaca1->nome = "Maggie";
$vaca1->cor = "amarela";
$fazenda->addAnimal($vaca1);

$vaca2 = new Vaca;
$vaca2->nome = "Margarida";
$vaca2->cor = "malhada";
$fazenda->addAnimal($vaca2);

$vaca3 = new Vaca;
$vaca3->nome = "Mococa";
$vaca3->cor = "preta";
$fazenda->addAnimal($vaca3);

//Ovelhas
$ovelha1 = new Ovelha;
$ovelha1->nome = "Mariel";
$ovelha1->cor = "branca";
$fazenda->addAnimal($ovelha1);

$ovelha2 = new Ovelha;
$ovelha2->nome = "Muriel";
$ovelha2->cor = "preta";
$fazenda->addAnimal($ovelha2);

$ovelha3 = new Ovelha;
$ovelha3->nome = "Abel";
$ovelha3->cor = "Cinza";
$fazenda->addAnimal($ovelha3);

echo PHP_EOL;
$fazenda->exibirAnimais();
echo PHP_EOL;
print_r($cavalo4);
?>