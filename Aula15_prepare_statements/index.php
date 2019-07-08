<!DOCTYPE html>
<html lang="pt=br">
    <head>
        <title>Celke</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        require './Conn.php';

        $conn = new Conn();
        #$conn->getConn();
        #var_dump($conn);
        $email = 'cesar@celke.com.br';
        $usuario = 'cesar';
        $senha = '123';
        try {
            $sql = "INSERT INTO usuarios (email, usuario, senha, created) VALUES (:email,:usuario,:senha,NOW())";
            $stmts = $conn->getConn()->prepare($sql);
            $stmts->bindParam(':email', $email, PDO::PARAM_STR);
            $stmts->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $stmts->bindParam(':senha', $senha, PDO::PARAM_STR);
            $stmts->execute();
            if($stmts->rowCount()){
                echo "Cadastrado com sucesso!";
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        ?>
    </body>
</html>
