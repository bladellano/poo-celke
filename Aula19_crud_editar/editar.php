<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Editar Usuário</h1>
        <?php
        require './Conn.php';
        $conn = new Conn();
        //Editar usuario

//        $Dados = filter_input(INPUT_POST, FILTER_DEFAULT); //filter_default: recebe tudo como uma string;
        $Dados = $_REQUEST; //filter_default: recebe tudo como uma string;
        print_r($Dados);exit;

        if (!empty($Dados['SendEditUser'])):
      
            unset($Dados['SendEditUser']);
            $sql = "UPDATE usuarios SET nome = :nome, email = :email, usuario = :usuario, senha = :senha, modified = NOW() WHERE id = :id";
            $stmt = $conn->getConn()->prepare($sql);
            $stmt->bindParam(':nome', $Dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $Dados['email'], PDO::PARAM_STR);
            $stmt->bindParam(':usuario', $Dados['usuario'], PDO::PARAM_STR);
            $stmt->bindParam(':senha', $Dados['senha'], PDO::PARAM_STR);
            $stmt->bindParam(':id', $Dados['id'], PDO::PARAM_INT);
            $stmt->execute();
        endif;


        //Pesquisando os dados do usuario
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $limit = 1;

        $sql = "SELECT * FROM usuarios WHERE id = :id LIMIT :limit";
        $stmt = $conn->getConn()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        $linha = $stmt->fetch(PDO::FETCH_ASSOC);
//        print_r($linha);
        ?>

        <form name="EditUsuario" action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $linha['nome'] ?>"><br><br>
            <label>E-mail:</label>
            <input type="email" name="email" value="<?php echo $linha['email'] ?>"><br><br>
            <label>Usuário:</label>
            <input type="text" name="usuario" value="<?php echo $linha['usuario'] ?>"><br><br>
            <label>Nome:</label>
            <input type="password" name="senha" value="<?php echo $linha['senha'] ?>"><br><br>
            <input type="submit" value="Cadastrar" name="SendEditUser">
        </form>
    </body>
</html>
