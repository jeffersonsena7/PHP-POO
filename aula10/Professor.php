<?php
    require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialida;
    private $salario;
    
    public function receberAumento($aumento){
      $this->setSalario($this->getSalario() + $aumento);
    }
   

    
    public function getEspecialida() {
        return $this->especialida;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialida($especialida): void {
        $this->especialida = $especialida;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }


}
