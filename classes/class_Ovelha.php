<?php 

class Ovelha {
    public $nome;
    public $cor;
    private $perdida;

    public function chamar() {
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
}


?>