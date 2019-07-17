<?php

namespace Sts\Controllers;

/**
 * Description of Blog
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class Blog {

    public $Dados;

    public function index() {

        $listarArtigo = new \Sts\Models\StsListarBlog();

        $this->Dados = $listarArtigo->listar();
//        echo '<pre>';
//        var_dump($this->Dados);
        
        $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo",$this->Dados);
        $carregarView->renderizar();
    }

}
