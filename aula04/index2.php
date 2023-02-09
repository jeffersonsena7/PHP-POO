<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta2.php';
                
                $c1 = new Caneta2("Xiaomi", "preto", 256,);
                
                echo "o Celular é do modelo {$c1->getModelo()}, na cor {$c1->getCor()}, com memoria de {$c1->getMemoria()}";
            ?>
        </pre>
    </body>
</html>