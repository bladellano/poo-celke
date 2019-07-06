<?php

/**
 * Description of Cheque
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
abstract class Cheque {

    public $Valor;
    public $Tipo;
    
    function __construct($Valor,$Tipo) {
        $this->Valor = $Valor;
        $this->Tipo = $Tipo;
    }
    
    function verValor() {
        return "Valor do cheque {$this->Tipo}: R$ {$this->real($this->Valor)} <hr>";
    }
    final function real($Valor) {
        return number_format($Valor,'2',',','.');
    }
}
