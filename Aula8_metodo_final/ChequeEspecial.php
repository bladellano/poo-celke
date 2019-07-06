<?php

/**
 * Description of ChequeEspecial
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class ChequeEspecial extends Cheque {

    //put your code here

    function calcularJuros() {
    $this->Valor = $this->Valor * 1.10;
    $this->Valor = parent::real($this->Valor);
    return "Valor do cheque {$this->Tipo}: R$ {$this->Valor}";
    }

}
