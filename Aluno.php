<?php

require_once 'Pessoa.php';
final class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    public final function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }

    function getMatricula(){
        return $this->matricula;
    }

    function getCurso(){
        return $this->curso;
    }

    function setMatricula($matricula){
        $this->matricula=$matricula;
    }

    function setCurso($curso){
        $this->curso=$curso;
    }
    
}