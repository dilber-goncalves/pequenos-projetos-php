<?php 
class Vaca {
    private $cor="malhada"; 
    public $nome;
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $coresPermitidas = array("amarela", "malhada", "preta", "branca", "marrom");
        if (!in_array($cor, $coresPermitidas)){
            echo "Cor inválida: $cor\n";
            return;   
        }
        $this->cor=$cor;
    }
    public function imprimeVaca(){
        $terminal = new Terminal();
        $terminal->writeln("Vaca: $this->nome, cor: $this->cor");
    }
}

$mimosa = new Vaca();
$mimosa->setCor("preta");
$mimosa->nome="Mimosa";

$bernadete = new Vaca();
$bernadete->nome="Bernadete";

$adelaide = new Vaca();
$adelaide->setCor("marrom");
$adelaide->nome="Adelide";

$bernadete->imprimeVaca();
$mimosa->imprimeVaca();
$adelaide->imprimeVaca();
?>
