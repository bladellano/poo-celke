<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        // Código do projeto
        require './Disciplina.php';

        $disciplina = new Disciplina("Caio",3, 3);
        echo $disciplina->situacao();
        
        echo $disciplina->situacaoAluno();
        
        echo Disciplina::situacaoAluno();
        ?>
    </body>
</html>
