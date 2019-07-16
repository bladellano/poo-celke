<?php

namespace Sts\Models;

use PDO;

/**
 * Description of StsListarBlog
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class StsListarBlog {

    public $Resultado;

    public function listar() {
//        echo "Pesquisa artigos no BD<br>";
        $listarArtigos = new \Sts\Models\Conn();
        $listarArtigos->getConn();

        $limit = 10;
        $sql = "SELECT * FROM artigos LIMIT :limit";
        $stmt = $listarArtigos->getConn()->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        //$stmt->fetch(PDO::FETCH_ASSOC);
        $this->Resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        //$this->Resultado = $stmt->fecthAll();        
        print_r($this->Resultado);
    }

}
