<?php

class Sexo{
    private $IDsexo;
    private $genero;

    public function __construct(){}

    public function getIDsexo(){
        return $this -> IDsexo;
    }

    public function getGenero(){
        return $this -> genero;
    }

    public function setIDsexo($IDsexo){
        $this -> IDsexo = $IDsexo;
    }

    public function setGenero($genero){
        $this -> genero = $genero;
    }
}

?>