<!DOCTYPE html> 
<html lang="pt=br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <?php
        require "./Conn.php";

        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//        var_dump($Dados);

        if (!empty(($Dados['SendCadUser']))):

            unset($Dados['SendCadUser']);

            $conn = new Conn();
            $sql = "INSERT INTO usuarios (nome, email, usuario, senha, created) VALUES (:nome, :email,:usuario,:senha,NOW())";
            $stmts = $conn->getConn()->prepare($sql);
            $stmts->bindParam(':nome', $Dados['nome'], PDO::PARAM_STR);
            $stmts->bindParam(':email', $Dados['email'], PDO::PARAM_STR);
            $stmts->bindParam(':usuario', $Dados['usuario'], PDO::PARAM_STR);
            $stmts->bindParam(':senha', $Dados['senha'], PDO::PARAM_STR);
            $stmts->execute();

            if ($stmts->rowCount()):
                echo "Cadastrado com sucesso";
            endif;
        endif;
        ?>

        <form name="CadUsuario" action="" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Nome Completo"><br><br>
            <label>E-mail:</label>
            <input type="email" name="email" placeholder="Seu e-mail"><br><br>
            <label>Usuário:</label>
            <input type="text" name="usuario" placeholder="Usuário para acessar p sistema"><br><br>
            <label>Nome:</label>
            <input type="password" name="senha" placeholder="Senha"><br><br>
            <input type="submit" value="Cadastrar" name="SendCadUser">
        </form>
    </body>
</html>
