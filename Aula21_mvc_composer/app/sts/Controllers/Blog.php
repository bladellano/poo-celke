<?php
namespace Sts\Controllers;
/**
 * Description of Blog
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class Blog {
    public function index() {
         $listarArtigo = new \Sts\Models\StsListaBlog();
        $listarArtigo->listar();
    }
}