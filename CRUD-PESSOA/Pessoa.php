<?php

class Pessoa{
    private $pdo;
    //conexão com o banco de dados
    public function __construct($dbname, $host, $user, $senha)
    {
        try {
            //code...
            $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha);
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " . $e->getMessage();
            exit();
        } catch (Exception $e) {
            echo "Erro generico: " . $e->getMessage();
            exit();
        }
    }

    //essa função para buscar os dados e colocar na tela canto direita
    public function buscarDados(){
        $res = array(); // caso o banco esteja vazio para n da erro
        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //essa função de cadastrar pessoas no banco de dados
    public function cadastrarPessoa($nome, $telefone, $email)
    { //antes de cadastrar verificar se já tem email cadastrado
        $cmd = $this->pdo->prepare("SELECT id FROM pessoa WHERE email = :e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();
        if($cmd->rowCount() > 0) //email já existe no banco
        {
            return false;
        }else{ // não foi encontrado no email, esse codigo para cadastrar 
            $cmd = $this->pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES(:n, :t, :e)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":e", $email);
            $cmd->execute();
            return true;
        }
    }

    public function excluirPessoa($id){
        $cmd = $this->pdo->prepare("DELETE FROM pessoa WHERE id= :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    //Buscar dados de uma pessoa
    public function buscarDadosPessoa($id){
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    
    //Atualizar dados no banco de dados    
    public function editarPessoa($id, $nome, $telefone, $email){
        $cmd = $this->pdo->prepare("UPDATE pessoa SET nome = :n, telefone = :t, email = :e WHERE id = :id");
        $cmd->bindValue(":n", $nome);
        $cmd->bindValue(":t", $telefone);
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }
}