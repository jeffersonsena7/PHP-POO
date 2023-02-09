<?php

    require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function soltarBolha(){
        echo "Soltar varias bolhas";
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo "<p>Comendo substância do mar</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    public function locomover() {
        echo "<p>Nadando</p>";
    }

}
