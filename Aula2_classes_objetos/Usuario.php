<?php
/**
 * Description of Usuario
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class Usuario {

    public $Nome;
    Public $Email;

    function getDadosUser($Nome, $Email) {
        return "O usuario {$Nome} tem o e-mail {$Email}";
    }

}
