<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "Bic cristal";
            $c1->cor = "Azul";
            print_r($c1);
            $c1->rabiscar();
        ?>
        </pre>
    </body>
</html>
