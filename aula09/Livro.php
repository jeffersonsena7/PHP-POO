<?php
    require_once 'Pessoas.php';
    require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function detalhes(){
        echo "<p>=========================</p>";
        echo "Titulo do livro: ".$this->getTitulo()."<br>";
        echo "Livro escrito por :".$this->getAutor()."<br>";
        echo "Tem um total de paginas ". $this->getTotalPaginas()."<br>";
        echo "quem está lendo o livro é: ".$this->leitor->getNome();        
    }
    
    public function __construct($titulo, $autor, $totalPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);
    }

    
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getTotalPaginas(){
        return $this->totalPaginas;
    }
    public function setTotalPaginas($totalPaginas){
        $this->totalPaginas = $totalPaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
     
        //metodo interface
    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p > $this->totalPaginas){
            $this->pagAtual = 0;
        }
        else{
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        if($this->pagAtual >= $this->totalPaginas){
        
            $this->pagAtual ++;
        }
    }
    public function voltarPag(){
        if($this->pagAtual <= 0){
            echo "Livro está fechado";
        }
    else {
          $this->pagAtual --;
 }
    }
    
}
