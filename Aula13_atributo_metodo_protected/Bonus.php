<?php

/**
 * Description of Bonus
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class Bonus extends FuncionarioProtected {
 
    public function verSalario() {
        parent::bonus(2500);
        return parent::verSalario();
    }
}
