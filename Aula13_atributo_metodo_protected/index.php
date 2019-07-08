<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        
        require './FuncionarioProtected.php';
        require './Bonus.php';
        
        $funcionario = new Bonus();
        $funcionario->setNome("Cezar");
        $funcionario->setSalario(5200);
        $funcionario->setBonus(2500);
        echo $funcionario->verSalario();
        ?>
    </body>
</html>
