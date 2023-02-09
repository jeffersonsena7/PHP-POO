<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
        <?php
            //A conexao com o banco de dados
        
        try {  //evitar de erro de conexão com o banco
              
            $pdo = new PDO("mysql:dbname=LOGIN;host=localhost","root",""); //para se conectar ao banco
            
} catch (PDOException $ex) { //para erro no banco de dados
    echo "Erro com o banco de dados: ". $ex->getMessage();         
}
 catch (Exception $ex){ //aqui qualquer tipo de erro
    echo "Erro genirico que não seja relacionado a banco de dados: ". $ex->getMessage();
 }        

//----------------------------INSERT--------------------------------------------
 //primeira forma e mais usada de inserir dados:
            //$res = $pdo->prepare("INSERT INTO pessoa(nome, telefone,email)VALUES(:n, :t, :e)");
            //$res->bindValue(":n", "Jamylle");
            //$res->bindValue(":t", "8390000000");
            //$res->bindValue(":e", "jamylle.victoria@gemail.com");
            //$res->execute();
            
 //segunda forma de inserir dados pouca usada, mas pode ser preciso usar
 //   ela passa diretamente os dados.
            
           //$pdo->query("INSERT INTO pessoa (nome, telefone, email) VALUES ('Luna', '839123456', 'luna@hotmail.com' )");
        
//-----------------------------DELETE E UPDADE-------------------------------------------
// $del = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
 //$id = 2;
 //$del->bindValue(":id",$id);
 //$del->execute();
 
 //ou
 
 //$res = $pdo->query("DELETE FROM pessoa WHERE id = '8'");
 
 //------------------------modificando updade---------------------------------
 
 //$mod = $pdo->prepare("update pessoa set email = :e where id= :id");
 //$mod->bindValue(":e","melissa77@gmail");
 //$mod->bindValue(":id", 7);
 //$mod->execute();
   
 //ou
 
 //$res = $pdo->query("update pessoa set email = 'luna.com' where id= '10'");
 
 //--------------------------SELECT--------------------------------
 
 $res = $pdo->prepare("select * from pessoa where id= :id");
 $res->bindValue(":id", "4");
 $res->execute();
 $resultado = $res->fetch(PDO::FETCH_ASSOC); //usado só para um registro uma linha
//PDO::FETCH_ASSOC, mostra só o que tem no banco sem as array 
//ou
 //#$resultado = $res->fetchAll(); //usado para varios registros
 
 //echo '<pre>';
// print_r($resultado); //serve só para o programador o print_r
//echo '</pre>' 
 
 //para mostrar ao ususario é usado foreach
 //foreach ($resultado as $key => $value){
   //  echo $key.": ".$value."<br>";
 //}
            ?>
    
    </body>
</html>
