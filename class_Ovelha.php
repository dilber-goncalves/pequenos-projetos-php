<?php 
class Ovelha {
    private $cor="branca"; 
    public $nome;
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $coresPermitidas = array("amarela", "branca", "preta", "marrom");
        if (!in_array($cor, $coresPermitidas)){
            echo "Cor inválida: $cor\n";
            return;   
        }
        $this->cor=$cor;
    }
    public function imprimeOvelha(){
        $terminal = new Terminal();
        $terminal->writeln("Ovelha: $this->nome, cor: $this->cor");
    }
}

$dolly = new Ovelha();
$dolly->setCor("preta");
$dolly->nome="Dolly";

$amora = new Ovelha();
$amora->nome="Amora";

$dora = new Ovelha();
$dora->setCor("marrom");
$dora->nome="Dora";

$amora->imprimeOvelha();
$dolly->imprimeOvelha();
$dora->imprimeOvelha();
?>