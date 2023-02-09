<?php

class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    private $tampar;

    public function __construct($m, $c, $p) { //metodo _construtor() ou Caneta() tanto faz
        $this->cor = $c;
        $this->ponta = $p;
        $this->modelo = $m;
        $this->tampar();
    }


    public function tampar(){
        $this->tampar = true;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
}
