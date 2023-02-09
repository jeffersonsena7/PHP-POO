<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';

                $c1 = new Caneta("azul", 0.5, "BIC");
                $c2 = new Caneta("vermelho", 0.7, "Piloto");
                //$c1->setModelo("bic"); // vai adicionar ao modelo
                //$c1->setPonta(0.5);
                //echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
           
                //get vai mostrar o que esta dentro de modelo e ponta
                print_r($c1);
                print_r($c2);
            ?>
        </pre>
    </body>
</html>
