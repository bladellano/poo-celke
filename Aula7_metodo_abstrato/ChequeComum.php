<?php

/**
 * Description of ChequeComum
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class ChequeComum extends Cheque{

    //put your code here
    function calcularJuros() {
        $this->Valor = $this->Valor * 1.25;
        $this->Valor = parent::real($this->Valor);
        return "Valor do cheque {$this->Tipo}: R$ {$this->Valor} <hr>";
    }

}
