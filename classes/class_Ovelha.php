<?php 

class Ovelha {
    public $nome;
    public $cor;
    private $perdida;

    public function encontrarOvelha() {
        $this->random();
        if ($this->perdida == true) {
            echo "A ovelha ".$this->nome." está perdida e não pôde ser encontrada";
        }else{
            echo $this->nome." está aqui... méeeééé!!!";
        }
    }

    public function perdida() {
        $this->perdida = true;
    }

    public function encontrada() {
        $this->perdida = false;
    }

    public function random() {
        $valorRand = rand(1,50);
        if ($valorRand < 25) {
            $this->perdida();
        }else{
            $this->encontrada();
        }
    }
}


?>