<?php


class Caneta { //atributos
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampada;
  
  function rabiscar(){  //metodos
      if ($this->tampada == true) {
          echo '<p> ERRo! Não posso rabiscar</p>';
      }
      else {
          echo '<p>Estou rabiscando</p>';    
      }
  }
  function tampar(){
      $this->tampada = true;
  }
  function destampar(){
      $this->tampada = false;
  }
}
