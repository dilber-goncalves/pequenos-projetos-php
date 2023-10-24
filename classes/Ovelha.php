<?php 

class Ovelha {
    //Atributos
    public $nome;
    public $cor;
    private $perdida;

    //Métodos
    public function encontrarOvelha() {
        $this->random();
        if ($this->getPerdida()) {
            echo "A ovelha ".$this->nome." está perdida e não pôde ser encontrada";
        }else{
            echo $this->nome." está aqui... méeeééé!!!";
        }
    }

    public function random() {
        $valorRand = rand(1,50);
        if ($valorRand < 25) {
            $this->setPerdida(false);
        }
    }

    //Métodos especiais
    public function __construct() {
        $this->setCor("branca");
        $this->setPerdida(false);
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this->cor;
    }

    public function setPerdida($perdida) {
        $this->perdida = $perdida;        
    }
    public function getPerdida() {
        return $this->perdida;
    }
}
?>