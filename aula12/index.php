<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            
            $m = new Mamifero();
            $m->setCorPelo("preto");
            $m->setIdade(2);
            $m->setMembros(4);
            $m->setPeso(8);
            print_r($m);
            $m->alimentar();
            $m->emitirSom();
            $m->locomover();
            
            
            echo '<p>=====================================</p>';
            $r = new Reptil();
            $r->setCorEscama("verde");
            $r->setIdade(2);
            $r->setMembros(4);
            $r->setPeso(8);
            print_r($r);
            $r->alimentar();
            $r->emitirSom();
            $r->locomover();
                        
            echo '<p>=====================================</p>';
            $p = new Peixe();
            $p->setCorEscama("azul");
            $p->setIdade(2);
            $p->setMembros(4);
            $p->setPeso(8);
            print_r($m);
            $p->alimentar();
            $p->emitirSom();
            $p->locomover();
            $p->soltarBolha();
            
            echo '<p>=====================================</p>';
            $a = new Ave();
            $a->setCorPena("vermelha");
            $a->setIdade(2);
            $a->setMembros(4);
            $a->setPeso(8);
            print_r($m);
            $a->alimentar();
            $a->emitirSom();
            $a->locomover();
            $a->fazerNinho();
        ?>
        </pre>
    </body>
</html>
