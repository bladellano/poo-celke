<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class FuncionarioProtected {

    //put your code here
    public $Nome;
    private $Salario;
    protected $Bonus;

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    function setBonus($Bonus) {
        $this->Bonus = $Bonus;
    }

    public function verSalario() {
        $this->Salario = $this->validarSalario($this->Salario);
        //$this->Bonus = $this->validarSalario($this->Bonus);
        return "O funcionário {$this->Nome} tem o salário R$ {$this->Salario} e bônus: {$this->Bonus}";
    }

    protected function bonus($Bonus) {
        $this->Bonus = $Bonus;
    }

    private function validarSalario($Salario) {
        if (is_numeric($Salario) && ($Salario > 0)):
            return $this->Salario = number_format($Salario, '2', ',', '.');
        else:
            die('Salario inválido');
        endif;
    }

}
