<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Listar Usuário</h1>
        <a href="cadastrar.php">Cadastrar</a><br><br>
        <?php
        if (isset($_SESSION['msg'])):
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        endif;

        require "./Conn.php";
        $conn = new Conn();
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->execute();

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: {$linha['id']}<br>";
            echo "Nome: {$linha['nome']}<br>";
            echo "E-mail: {$linha['email']}<br>";
            echo "Usuário: {$linha['usuario']}<br>";
            echo "Inserido: " . date('d/m/Y H:i:s', strtotime($linha['created'])) . "<br>";
            if ($linha['modified'] != ""):
                echo "Alterado: " . date('d/m/Y H:i:s', strtotime($linha['modified']));
            endif;
            echo '<br><a href="visualizar.php?id=' . $linha['id'] . '">Visualizar</a><br>';
            echo '<a href="editar.php?id=' . $linha['id'] . '">Editar</a><br>';
            echo '<a href="apagar.php?id=' . $linha['id'] . '">Apagar</a><br>';
            echo "<hr>";
        }
        ?>

    </body>
</html>
