 
<?php

session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
require './Conn.php';
if (!empty($id)):
    $conn = new Conn();
    $sql = "DELETE FROM usuarios WHERE id=:id";
    $stmt = $conn->getConn()->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//    $stmt->execute();

    if ($stmt->execute()):
        $_SESSION['msg'] = "<p style='color:green'>Registro apagado com sucesso</p>";
        header("location: index.php");
        else:
        $_SESSION['msg'] = "<p style='color:red'>Registro não foi apagado com sucesso</p>";
        header("location: index.php");
    endif;
else:
    $_SESSION['msg'] = "<p style='color:red'>Registro não encontrado</p>";
    header("location: index.php");
endif;