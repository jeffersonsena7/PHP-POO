<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();

            $l[0] = new Lutador("Jefferson", "Brasil", 33, 1.80, 92.3, 16, 0, 3);
            
            $l[1] = new Lutador("Jamylle", "EUA", 16, 1.50, 62.3, 6, 4, 3);
            
            $l[2] = new Lutador("Joseane", "França", 36, 1.56, 72.3, 3, 6, 1);
            
            $l[3] = new Lutador("Melissa", "Alemanha", 20, 1.20, 40.3, 30, 0, 8);
            
            $l[4] = new Lutador("Luna", "Africa", 60, 1.70, 126.3, 40, 7, 8);
            
            $l[5] = new Lutador("Emylle", "Portugal", 18, 1.60, 100.3, 2, 20, 3);
            
            
            
            $ufc01 = new Luta();
            $ufc01->marcarLuta($l[0], $l[5]);
            $ufc01->lutar();
            
            $l [0]->status();
            $l [5]->status();
            //$l [2]->apresentar();
        ?>
        </pre>
    </body>
</html>
