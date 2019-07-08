<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class FuncionarioPrivado {

    //put your code here
    public $Nome;
    private $Salario;

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        return "o funcionário: {$this->Nome} tem o salário R$ {$this->Salario}";
    }

    private function validarSalario($Salario) {
        if (is_numeric($Salario) && ($Salario > 0)):
            return $this->Salario = number_format($Salario, '2', ',', '.');
        else:
            die('Salario inválido');
        endif;
    }

}
