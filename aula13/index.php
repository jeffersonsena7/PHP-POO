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
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            $c = new Cachorro();
            $c->emitirSom();
                    
            $l = new Lobo();
            $l->emitirSom();
            
            $m = new Mamifero();
            $m->emitirSom();
        ?>
        </pre>
    </body>
</html>
