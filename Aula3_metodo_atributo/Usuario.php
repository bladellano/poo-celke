<?php

/**
 * Description of Usuario
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class Usuario {

    public $Nome;
    public $Email;
    public $Prova;
    public $Trabalho;

    function setUsuario($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }

    function getUsuario() {
        return "Nome do Aluno: {$this->Nome}. E-mail: {$this->Email}";
    }

    function setNota($Prova, $Trabalho) {
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }

    function getNota() {
        return "Nota: ". ($this->Prova + $this->Trabalho);
    }

}
