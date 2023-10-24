<?php 

class Vaca {
    //Atributos
    public $nome;
    public $cor;
    private $foiprobrejo;

    //Métodos
    public function chamarVaca() {
        $this->random();
        if($this->getBrejo()) {
            echo "Não é possível chamar... a ".$this->nome." foi pro brejo :( ";
        }else{
            echo $this->nome." está aqui... Muuuuuuu!!";
        }
    }

    public function random() {
        $valorRand = rand(1,50);
        if ($valorRand < 25) {
            $this->setBrejo(true);
        }
    }

    //Métodos especiais
    public function __construct() {
        $this->setCor("malhada");
        $this->setBrejo(false);

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

    public function setBrejo($foiprobrejo) {
        $this->foiprobrejo = $foiprobrejo;
    }
    public function getBrejo() {
        return $this->foiprobrejo;
    }
}
?>
