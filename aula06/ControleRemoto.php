<?php

require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //metodos especiais
    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    function getVolume(){
        return $this->volume;
    }
    function setVolume($volume){
        $this->volume = $volume;
    }
    function getLigado(){
        return $this->ligado;
    }
    function setLigado($ligado){
        $this->ligado = $ligado;
    }
    function getTocando(){
        return $this->tocando;
    }
    function setTocando($tocando){
        $this->tocando = $tocando;
    }
    
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<br>";
        echo "-------menu--------";
        echo "<br>";
        echo "<br> Esta ligado? : " .($this->getLigado()?"sim":"não");
        echo "<br> Esta tocando? : " .($this->getTocando()?"sim":"não");
        echo "<br> Volume: " . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i += 10){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "<br> Fechar Menu...";
    }
    public function maisVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if($this->getLigado() == true){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo(){
        if($this->getLigado() == true && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado() == true && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() == true && ! $this->getTocando() == true){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() == true && $this->getTocando() == true){
            $this->setTocando(false);
        } 
    }
}
