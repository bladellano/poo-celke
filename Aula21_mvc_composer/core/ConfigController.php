<?php

namespace Core;

/**
 * Description of ConfigController
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class ConfigController {

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlMetodo;

    public function __construct() {

        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {

            $this->Url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->UrlConjunto = explode("/", $this->Url);

            if (isset($this->UrlConjunto[0]) && (isset($this->UrlConjunto[1]))) {
                $this->UrlController = $this->UrlConjunto[0];
                $this->UrlMetodo = $this->UrlConjunto[1];
            } else {

                $this->UrlController = 'home';
                $this->UrlMetodo = 'index';
            }
        } else {

            $this->UrlController = 'home';
            $this->UrlMetodo = 'index';
        }
        echo "Classe: {$this->UrlController} - Método: {$this->UrlMetodo}<br>";
    }
    
    public function carregar() {
        $classe = "\\Sts\\Controllers\\".$this->UrlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
 
    }

}
