<?php

class Peso{

    private $IDpeso;
    private $nome;
    private $pesoMaximo;
    private $IDsexo;
    private $IDidade;

    public function __construct(){}

    public function getIDpeso(){
        return $this -> IDpeso;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function getPesoMaximo(){
        return $this -> pesoMaximo;
    }

    public function getIDsexo(){
        return $this -> IDsexo;
    }

    public function getIDidade(){
        return $this -> IDidade;
    }

    public function setIDpeso($IDpeso){
        $this -> IDpeso = $IDpeso;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function setpesoMaximo($pesoMaximo){
        $this -> pesoMaximo = $pesoMaximo;
    }

    public function setIDsexo($IDsexo){
        $this -> IDsexo = $IDsexo;
    }

    public function setIDidade($IDidade){
        $this -> IDidade = $IDidade;
    }
}
?>