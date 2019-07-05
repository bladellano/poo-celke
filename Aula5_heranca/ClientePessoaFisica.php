<?php

/**
 * Description of ClientePessoaFisica
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class ClientePessoaFisica extends Cliente {
    //put your code here
    public $Nome;
    public $Cpf;
    
    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setCpf($Cpf) {
        $this->Cpf = $Cpf;  
    }
    
    function verEndereco() {
        return "<p><b>Endereço da Pessoa Física.</b><br>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairro}<br> Nome: {$this->Cpf}<hr> </p>";
    }

    
}
