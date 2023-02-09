<?php
    require_once 'Pessoa.php';
class Aluno extends Pessoa{
        //atributos
    private $matricula;
    private $curso;
        //metodos
    public function cancelarMatricula(){
        echo "<p>Matricula será cancelada :". $this->getNome(). "</p>";
    }
        //metodos especiais   
     
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


}
