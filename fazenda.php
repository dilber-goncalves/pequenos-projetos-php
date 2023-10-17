<?php

include 'classes/class_Vaca.php';
include 'classes/class_Cavalo.php';
include 'classes/class_Ovelha.php';

//Cavalos
$cavalo1 = new Cavalo;
$cavalo1->cor = "preto";
$cavalo1->nome = "Alazão";
$cavalo1->acordado();

$cavalo2 = new Cavalo;
$cavalo2->cor = "branco";
$cavalo2->nome = "Napoleão";
$cavalo2->dormindo();

$cavalo3 = new Cavalo;
$cavalo3->cor = "marrom";
$cavalo3->nome = "Pé de Pano";

//Vacas
$vaca1 = new Vaca;
$vaca1->nome = "Maggie";
$vaca1->cor = "amarela";
$vaca1->foiProBrejo();

$vaca2 = new Vaca;
$vaca2->nome = "Margarida";
$vaca2->cor = "malhada";
$vaca2->saiDoBrejo();

$vaca3 = new Vaca;
$vaca3->nome = "Mococa";
$vaca3->cor = "preta";
$vaca3->foiProBrejo();

//Ovelhas
$ovelha1 = new Ovelha;
$ovelha1->nome = "Mariel";
$ovelha1->cor = "branca";
$ovelha1->perdida();

$ovelha2 = new Ovelha;
$ovelha2->nome = "Muriel";
$ovelha2->cor = "preta";
$ovelha2->perdida();

$ovelha3 = new Ovelha;
$ovelha3->nome = "Abel";
$ovelha3->cor = "Cinza";
$ovelha3->encontrada();
?>