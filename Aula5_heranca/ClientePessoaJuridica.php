<?php

/**
 * Description of ClientePessoaJuridica
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class ClientePessoaJuridica extends Cliente {

    //put your code here
    public $Cnpj;
    public $NomeFantasia;

    function setCnpj($Cnpj) {
        $this->Cnpj = $Cnpj;
    }

    function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }

    function verEndereco() {
        return "<p><b>Endereço da Pessoa Física.</b><br>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairro}<br>Nome Fantasia: {$this->NomeFantasia} <br> Cnpj: {$this->Cnpj}<hr> </p>";
    }

}
