<?php

/**
 * Description of Nota
 *
 * @copyright (c) 2019, Caio Dellano - FireFly
 */
class Nota {
    public $Aluno;
    public $Prova;
    public $Trabalho;
    public $Disciplina;
    
    function setProva($Prova) {
        $this->Prova = $Prova;
    }

    function setTrabalho($Trabalho) {
        $this->Trabalho = $Trabalho;
    }

    function setDisciplina($Disciplinas) {
        $this->Disciplina = $Disciplinas;
    }

        function setNota($Aluno, $Disciplina, $Prova, $Trabalho) {
        $this->Aluno = $Aluno;
        $this->Disciplina = $Disciplina;
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }
    
    function getNota() {
        return "Nome do aluno: {$this->Aluno}<br> Disciplina: {$this->Disciplina}<br> Nota: ".($this->Prova + $this->Trabalho)."<br><hr>";
    }
    
}
