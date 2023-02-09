<?php
require_once 'Pessoa.php';
$p = new Pessoa("login", "localhost", "root", "");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pessoas</title>
        <link rel="stylesheet" href="style.css">    
    </head>
    <body>
        <?php
            if(isset($_POST['nome'])){ //Se a pessoa clicou no botão cadastrar ou no botão editar
                
                //------------------Editar-------------------------------
                if(isset($_GET['id_up']) && !empty($_GET['id_up'])){
                    $id_upd = addslashes($_GET['id_up']);
                    $nome = addslashes($_POST['nome']);
                     $telefone = addslashes($_POST['telefone']);
                    $email = addslashes($_POST['email']);
                    if(!empty($nome) && !empty($telefone) && !empty($email)){ //empty verifica se deixou vazio 
                        //EDITAR
                        $p->editarPessoa($id_upd, $nome, $telefone, $email);
                        header("location: index.php"); //atualizar pagina
                    }else{
                        ?>
                        <div class="alarme">
                            <h4>Preencha todos os campos</h4>
                        </div>
                        <?php
                }
                }
                //------------------CADASTRAR--------------------------
                else{
                    $nome = addslashes($_POST['nome']);
                    $telefone = addslashes($_POST['telefone']);
                     $email = addslashes($_POST['email']);
                    if(!empty($nome) && !empty($telefone) && !empty($email)){ //empty verifica se deixou vazio 
                        //CADASTRAR
                        if (!$p->cadastrarPessoa($nome, $telefone, $email)) {
                    ?>    
                        <div class="alarme">
                            <h4>E-mail já cadastrado!!!</h4>
                        </div>
                    <?php
                    }
                    }else{
                ?>
                        <div class="alarme">
                        <h4>Preencha os espaços vazios</h4>
                        </div>
                <?php
                    }
                }
            
            }
        ?>
        <?php
            if(isset($_GET["id_up"])){ 
                $id_update = addslashes($_GET['id_up']);
                $res = $p->buscarDadosPessoa($id_update);

            }
        ?>
        <section id='esquerda'>
            <form method="post">
                <h2>CADASTRAR PESSOAS</h2>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome"
                value ="<?php if(isset($res)){echo $res['nome'];}?>">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone"
                value="<?php if(isset($res)){echo $res['telefone'];}?>">
                <label for="email">e-mail</label>
                <input type="email" name="email" id="email"
                value="<?php if(isset($res)){echo $res['email'];}?>">
                <input type="submit" value="<?php if(isset($res)){echo "atualizar";}else{echo "cadastrar";} ?>">

            </form>
        </section>
        <section id='direita'>
            <table>
                <tr id="titulo">
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td colspan="2">Email</td>
                </tr>
                <?php
                $dados = $p->buscarDados();
                if(count($dados) > 0){  //tem pessoas no banco de dados
                    for($i=0; $i < count($dados); $i++){
                        echo "<tr>";
                        foreach ($dados[$i] as $k => $v) {
                            if ($k != "id") {
                                echo "<td>" . $v . "</td>";
                            }
                        }?>
                        <td>
                            <a href="index.php?id_up=<?php echo $dados[$i]['id'];?>">Editar</a> 
                            <a href="index.php?id=<?php echo $dados[$i]['id'];?>">Excluir</a>
                        </td>
                        <?php
                        //isso pega o id pela url  <?php echo $dados[$i]['id']; 
                         echo "</tr>";
                    }                                    
                                    
                }
                else{ // Banco de dados esta vazio
                ?>   
                    <div class="alarme">
                        <h4>Ainda não há pessoas cadastradas</h4>

                    </div>
                <?php    
                }
            ?>       
            </table>
        </section>
    </body>
</html>

<?php
    if(isset($_GET['id'])){ //buscar o id pelo get
    $id_pessoa = addslashes($_GET['id']); //addslashes proteger o conteudo
    $p->excluirPessoa($id_pessoa);
    header("location: index.php"); //para atualizar a pagina
    }
?>
