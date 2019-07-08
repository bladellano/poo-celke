<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        // Código do projeto
        require "./ICurso.php";
        require "./CursoGraduacao.php";
        require "./CursoPosGraduacao.php";


        $curso = new CursoGraduacao();
        echo $curso->disciplina("Desenvolvimento Web");
        echo $curso->professor('Cezar');
        
        $cursoPosGrad = new CursoPosGraduacao();
        echo $cursoPosGrad->disciplina('Rede');
        echo $cursoPosGrad->professor('Kelly');
        
        ?>
    </body>
</html>
