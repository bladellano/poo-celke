<?php
namespace Sts\Controllers;
/**
 * Description of Blog
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class Blog {
    public function index() {
        echo "Controller da página Blog<br>";
        
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $listarArtigo->listar();
    }
}
