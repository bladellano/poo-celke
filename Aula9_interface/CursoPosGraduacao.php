<?php

/**
 * Description of CursoPosGraduacao
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class CursoPosGraduacao implements ICurso {

    //put your code here

    public $NomeDisplina;
    public $NomeProfessor;

    public function disciplina($NomeDisciplina) {
        $this->NomeDisciplina = $NomeDisciplina;
        return "Disciplina: {$this->NomeDisciplina}<br>";
    }

    public function professor($NomeProfessor) {
        $this->NomeProfessor = $NomeProfessor;
        return "Professor: {$this->NomeProfessor}<hr>";
    }

}
