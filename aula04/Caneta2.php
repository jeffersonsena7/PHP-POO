<?php

class Caneta2 {
   public $modelo;
   private $cor;
   private $memoria;
   public $acessorio;


   public function Caneta2($mo, $c, $me){
       $this->modelo = $mo;
       $this->cor = $c;
       $this->memoria = $me;
       $this->acessorio(); 
   }
    public function acessorio(){
        $this->acessorio = true;    
   }
   public function getModelo(){
       return $this->modelo;
   }
   public function setModelo($mo){
       $this->modelo = $mo;
   }
   public function getCor(){
       return $this->cor;
   }
   public  function setCor($c){
       $this->cor = $c;
   }
   public function getMemoria(){
       return $this->memoria;
   }
   public function steMemoria($me){
       $this->memoria = $me;
   }
}
   
   