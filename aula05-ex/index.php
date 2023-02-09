<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio</title>
    </head>
    <body>
        <h1>Conta Bancaria</h1>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            $p1->setNumConta(29366);
            $p1->abrirConta("cc");
            $p1->setDono("Jefferson de Sena");
            
            $p1->depositar(300);
            
            $p1->pagarMensal("cc");
            
            $p2->setNumConta(32008);
            $p2->abrirConta("cp");
            $p2->setDono("Jamylle Victória");
            
            $p2->depositar(500);
            
            $p2->sacar(100);
            
            $p2->pagarMensal("cp");
            
            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </body>
</html>
