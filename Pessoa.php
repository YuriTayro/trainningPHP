<?php

abstract class Pessoa{
    public $nome;
    private $idade;
    private $sexo;

    public final function fazerAviversario(){
        $this->idade++;
    }

    function getNome(){
        return $this->nome;
    }

    function getIdade(){
        return $this->idade;
    }

    function getSexo(){
        return $this->sexo;
    }

    function setNome($nome){
        $this->nome=$nome;
    }

    function setIdade($idade){
        $this->idade=$idade;
    }

    function setSexo($sexo){
        $this->sexo=$sexo;
    }
}