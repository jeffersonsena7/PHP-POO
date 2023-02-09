<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();
            
            $p1->setNome("Jefferson");
            $p1->setIdade(33);
            $p1->setSexo("Masculino");
            
            $p2->setNome("Jamylle");
            $p2->setMatricula(true);
            $p2->setCurso("PHP");
            $p2->setIdade(16);
            $p2->setSexo("Feminino");
            
            $p3->setNome("Joseane");
            $p3->setEspecialida("Programadora");
            $p3->setIdade(36);
            $p3->setSexo("Feminino");
            $p3->setSalario(1200);
            
            $p4->setNome("Melissa");
            $p4->setSetor("Limpeza");
            $p4->setTrabalhando(true);
            $p4->setIdade(20);
            $p4->setSexo("feminino");
            
            //$p3->receberAumento(500);
            //$p4->mudarTrabalho();
            //$p2->cancelarMatricula();
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
        </pre>
    </body>
</html>
