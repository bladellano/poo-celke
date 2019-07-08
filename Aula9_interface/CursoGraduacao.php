<?php

/**
 * Description of CursoGraduacao
 *
 * @copyright (c) 2019, Caio Dellano - FireFly}
 */
class CursoGraduacao implements ICurso {

    //put your code here
    public $NomeDisciplina;
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
