<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Visualizar Usuário</h1>
        <?php
        require "./Conn.php";
        $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
        $limit = 1;
        $conn = new Conn();
        $sql = "SELECT * FROM usuarios WHERE id = :id LIMIT :limit";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);  
        $stmt->bindParam(':limit',$limit,PDO::PARAM_INT);  
        
        $stmt->execute();

         $linha = $stmt->fetch(PDO::FETCH_ASSOC); 
        echo "ID: {$linha['id']}<br>";
        echo "Nome: {$linha['nome']}<br>";
        echo "E-mail: {$linha['email']}<br>";
        echo "Usuário: {$linha['usuario']}<br>";
        echo "Inserido: " . date('d/m/Y H:i:s', strtotime($linha['created'])) . "<br>";
        if ($linha['modified'] != ""):
            echo "Alterado: " . date('d/m/Y H:i:s', strtotime($linha['modified']));
        endif;
      
        echo "<hr>";

        ?>

    </body>
</html>
