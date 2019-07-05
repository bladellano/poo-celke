<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <title>Celke</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        require "./Nota.php";
        
        $notas = new Nota();
        $notas->setNota("Caio Silva", "Poo", "3", "5");
        echo $notas->getNota();
        
        $notasDois = clone $notas;
        $notasDois->setProva(6);
        $notasDois->setTrabalho(4);
        $notasDois->setDisciplina("História");
        
        echo $notasDois->getNota();
        ?>
    </body>
</html>
