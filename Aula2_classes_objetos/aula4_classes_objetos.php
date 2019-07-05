<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Usuario.php';
        
        $usuario = new Usuario();
        echo $usuario->getDadosUser("Caio Silva", "bladellano@gmail.com");
        
        ?>
    </body>
</html>
