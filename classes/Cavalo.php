<?php 

class Cavalo {
    //Atributos
    public $cor;
    public $nome;
    private $acordado;

    //Métodos
    public function relinchar() {
        $this->random();
        if ($this->getAcordado() == true){
            echo "O cavalo está relinchando! iiirrrrí!!!";
        }else{
            echo "O cavalo não pode relinchar pois está dormindo!";
        }
    }

    public function random() {
        $valorRand = rand(1,50);
        if ($valorRand < 25) {
            $this->setAcordado(false);
        }       
    }

    //Métodos especiais
    public function __construct() { 
        $this->setCor("marrom");
        $this->setAcordado(true);
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this->cor;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setAcordado($acordado) {
        $this->acordado = $acordado;
    }
    public function getAcordado() {
        return $this->acordado;
    }
}
?>