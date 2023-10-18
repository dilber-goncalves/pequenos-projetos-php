<?php
class Fazenda {
    private $animais = [];

    function addAnimal($animal) {
        $this->animais[] = $animal;
    }

    function exibirAnimais() {
        echo "Animais na Fazenda:\n";
        foreach ($this->animais as $animal) {
            echo $animal->nome."\n";
        }
    }
}
?>