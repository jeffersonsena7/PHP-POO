<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            
            $v1 = new Visitante();
            $v1->setNome("Jamylle");
            $v1->setIdade(16);
            $v1->setSexo("Feminino");            
            print_r($v1);
            
            
            echo '<p>==========================================</p>';
            $a1 = new Aluno();
            $a1->setNome("Jefferson");
            $a1->setMatricula(777777);
            $a1->setSexo("Masculino");
            $a1->setCurso("TI");
            $a1->setIdade(33);
            print_r($a1);
            $a1->pagarMensalidade();
            
                    
            echo '<p>==========================================</p>';
            $b1 = new Bolsista();
            $b1->setNome("Joseane");
            $b1->setMatricula(12112121);
            $b1->setIdade(36);
            $b1->setSexo("Feminino");
            $b1->setCurso("Enfermagem");
            $b1->setBolsa("sim");
            print_r($b1);
            
            $b1->pagarMensalidade();
        
        ?>
        </pre>
    </body>
</html>
