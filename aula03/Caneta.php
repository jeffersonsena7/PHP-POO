<?php


class Caneta { //atributos
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;
  
  public function rabiscar(){  //metodos
      if ($this->tampada == true) {
          echo '<p> ERRo! Não posso rabiscar</p>';
      }
      else {
          echo '<p>Estou rabiscando</p>';    
      }
  }
  private function tampar(){
      $this->tampada = true;
  }
  private function destampar(){
      $this->tampada = false;
  }
}
