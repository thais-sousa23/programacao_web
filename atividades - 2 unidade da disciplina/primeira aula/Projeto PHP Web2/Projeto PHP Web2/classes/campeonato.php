<?php

class Campeonato{

    private $IDcampeonato;
    private $nome;
    private $local;
    private $data;
    private $organizador;

    public function __construct(){}

    public function getIDcampeonato(){
        return $this -> IDcampeonato;
    }
    
    public function getNome(){
        return $this -> nome;
    }

    public function getLocal(){
        return $this -> local;
    }

    public function getData(){
        return $this -> data;
    }
    
    public function getOrganizador(){
        return $this -> organizador;
    }

    public function setIDcampeonato($IDcampeonato){
        $this -> IDcampeonato = $IDcampeonato;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function setLocal($local){
        $this -> local = $local;
    }
    
    public function setData($data){
        $this -> data = $data;
    }
    
    public function setOrganizador($organizador){
        $this -> organizador = $organizador;
    }
}
?>