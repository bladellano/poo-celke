<?php
namespace Sts\Models;
/**
 * Description of StsListarBlog
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class StsListarBlog {
    public function listar() {
//        echo "Pesquisa artigos no BD<br>";
        $listarArtigos = new \Sts\Models\Conn();
        $listarArtigos->getConn();
    }
}
