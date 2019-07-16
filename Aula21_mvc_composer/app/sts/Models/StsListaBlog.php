<?php
namespace Sts\Models;
/**
 * Description of StsListaBlog
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class StsListaBlog {
    public function listar() {
     $listarArtigos = new \Sts\Models\Conn();
     $listarArtigos->getConn();
    }
}
