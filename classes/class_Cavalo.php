<?php 

class Cavalo {
    public $cor;
    public $nome;
    private $acordado;

    public function relinchar() {
        $this->random();
        if ($this->acordado == true){
            echo "O cavalo está relinchando! iiirrrrí!!!";
        }else{
            echo "O cavalo não pode relinchar pois está dormindo!";
        }
    }

    public function acordado(){
        $this->acordado = true;
    }

    public function dormindo(){
        $this->acordado = false;
    }

    public function random() {
        $valorRand = rand(1,50);
        if ($valorRand < 25) {
            $this->dormindo();
        }else{
            $this->acordado();
        }
    }
}
?>