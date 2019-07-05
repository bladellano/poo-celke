<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Atributos e métodos</title>
    </head>
    <body>
        <?php
        require './Usuario.php';
        
        $usuario = new Usuario();
        $usuario->setUsuario("Caio", "bladellano@hotmail.com");
        echo $usuario->getUsuario();
        $usuario->setNota(5,2);
        echo "<br>";
        echo $usuario->getNota();
        ?>
    </body>
</html>
