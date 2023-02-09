<?php
      //atributos
class ContaBanco { 
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
            //metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "cc"){
            $this->setSaldo(50);
        }
        else{$this->setSaldo(150);
            
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo 'Conta ainda tem dinheiro não pode ser fechada';
        }
        elseif ($this->getSaldo() < 0) {
            echo 'conta negativa não pode ser fechada';        
        }
        else {
            echo "conta fechada";
            $this->setStatus(false);
        }
    }
    public function depositar($v){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $v);
            echo "deposito de R$ $v, realizado por :".$this->getDono()."</p>";
        }
        else{
            echo 'conta fechada não posso de positar';
        }
    }
    public function sacar($v){
        if($this->getStatus() == true){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "Saque de R$ $v  na conta de :".$this->getDono()."</p>";
            }
            else {
                echo 'Saldo insuficiente para saque';
            }
            
        }else{
            echo 'Não posso sacar de uma conta fechada';
        }
    }
    public function pagarMensal($v){
        if($this->getTipo() == "cc"){
            $v = 12;
            echo "Pagamento R$ $v mensal realizado da conta: ".$this->getDono(). "</p>";
        } else if($this->getTipo() == "cp"){
            $v = 20;
            echo "pagamento R$ $v mensal realizado da conta: ".$this->getDono(). "</p>";
        }
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() - $v);
        }
        else{
            echo 'Problema com a conta não posso cobrar';
        }
    }

        //metodos especiais
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }
    public function saldo(){
        $this->saldo = 0;
    }
    public function status(){
        $this->status = false;
    }
    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($nc){
        $this->numConta = $nc;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($sal){
        $this->saldo = $sal;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($sta){
        $this->status = $sta;
    }
}
