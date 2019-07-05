<?php

/**
 * Description of Cliente
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class Cliente {

    public $Endereco;
    public $Bairro;

    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setBairro($Bairro) {
        $this->Bairro = $Bairro;
    }
    
    function verEndereco() {        
        return "<p>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairro}<hr></p>";
    }
}
