<?php 

class Cavalo {
    public $cor;
    public $nome;
    private $acordado;

    public function relinchar() {
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
}
?>