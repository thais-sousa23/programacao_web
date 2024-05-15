<?php

class Faixa {

    private $IDfaixa;
    private $cor;
    private $IDidade;

    public function __construct(){}

    public function getIDfaixa(){
        return $this -> IDfaixa;
    }

    public function getCor(){
        return $this -> cor;
    }

    public function getIDidade(){
        return $this -> IDidade;
    }

    public function setIDfaixa($IDfaixa){
        $this -> IDfaixa = $IDfaixa;
    }

    public function setCor($cor){
        $this -> cor = $cor;
    }

    public function setIDidade($IDidade){
        $this -> IDidade = $IDidade;
    }
}
?>