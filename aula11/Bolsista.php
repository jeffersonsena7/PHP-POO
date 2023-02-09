<?php
    require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    
    public function RenovarBolsa(){
        echo "<p> Bolsa renovada de $this->nome. </p>";
    }
    
    public function pagarMensalidade() {
        parent::pagarMensalidade();
        echo "<p> $this->nome é bolsista! Paga com desconto.<p/>";
    }


    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }


}
