<?php
    require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }

    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de mamifero</p>";
    }

    public function locomover() {
        echo "<p>Andando</p>";
    }

}
