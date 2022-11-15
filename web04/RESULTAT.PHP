<!DOCTYPE html>
<html>
    <head>
        <title>Fichier PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <h2>Variables passées par la méthode GET</h2>
        <pre>
            <?php
                print_r($_GET);
            ?>
        </pre>
        
        <h2>Variables passées par la méthode POST</h2>
        <pre>
            <?php
                print_r($_POST);
            ?>
        </pre>
    </body>
</html>
