<?php 
class Vaca {
    public $nome;
    public $cor;
    private $foiprobrejo;

    public function chamar() {
        if($this->foiprobrejo == true) {
            echo "Não é possível chamar... a ".$this->nome." foi pro brejo :( ";
        }else{
            echo $this->nome." está aqui... Muuuuuuu!!";
        }
    }

    public function foiProBrejo() {
        $this->foiprobrejo = true;
    }

    public function saiDoBrejo() {
        $this->foiprobrejo = false;
    }
}
?>
