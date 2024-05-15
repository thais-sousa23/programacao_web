<?php

class Idade{

    private $IDidade;
    private $nome;
    private $idadeMinima;
    private $idadeMaximo;

    public function __construct(){}

    public function getIDidade(){
        return $this -> IDidade;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function getIdadeMinima(){
        return $this -> idadeMinima;
    } 

    public function getIdadeMaximo(){
        return $this -> idadeMaximo;
    }

    public function setIDidade($IDidade){
        $this -> IDidade = $IDidade;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function setIdadeMinima($idadeMinima){
        $this -> idadeMinima = $idadeMinima;
    }

    public function setIdadeMaxima($idadeMaximo){
        $this -> idadeMaximo = $idadeMaximo;
    }
    
}

?>