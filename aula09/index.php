<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Livro.php';
            require_once 'Pessoas.php';
            
            $p[0] = new Pessoas("Jefferson", 33, "M");
            $p[1] = new Pessoas("Jamylle", 16, "F");
            
                
        
            $l[0] = new Livro("PHP", "Gisely", 300, $p[0]);
            $l[1] = new Livro("JavaScript", "Sará", 500, $p[1]);
            
            $l[0]->detalhes();
            
        ?>
        </pre>
    </body>
</html>
