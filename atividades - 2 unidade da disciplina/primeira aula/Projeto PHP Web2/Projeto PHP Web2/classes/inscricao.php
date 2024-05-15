<?php

class Inscricao{

    private $IDinscricao;
    private $IDatleta;
    private $IDacademia;
    private $IDfaixa;
    private $IDpeso;
    private $IDsexo;

    public function __construct(){}

    public function getIDinscricao(){
        return $this -> IDinscricao;
    }

    public function getIDatleta(){
        return $this -> IDatleta;
    }

    public function getIDacademia(){
        return $this -> IDacademia;
    }

    public function getIDfaixa(){
        return $this -> IDfaixa;
    }

    public function getIDpeso(){
        return $this -> IDpeso;
    }

    public function getIDsexo(){
        return $this -> IDsexo;
    }

    public function setIDinscricao($IDinscricao){
        $this -> IDinscricao = $IDinscricao;
    }

    public function setIDatleta($IDatleta){
        $this -> IDatleta = $IDatleta;
    }

    public function setIDacademia($IDacademia){
        $this -> IDacademia = $IDacademia;
    }

    public function setIDfaixa($IDfaixa){
        $this -> IDfaixa = $IDfaixa;
    }

    public function setIDpeso($IDpeso){
        $this -> IDpeso = $IDpeso;
    }

    public function setIDsexo($IDsexo){
        $this -> IDsexo = $IDsexo;
    }

}

?>