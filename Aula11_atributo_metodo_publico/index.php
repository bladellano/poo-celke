<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        // Código do projeto
        require './Funcionario.php';
        
        $funcionario = new Funcionario();
        $funcionario->setNome('Caio');
        $funcionario->setSalario(5200);
        echo $funcionario->verSalario();
        
        
        ?>
    </body>
</html>
