<?php

class Academia{
    private $IDacademia;
    private $nome;
    private $cnpj;
    private $endereco;
    private $responsavel;
    private $telefone;

    public function __construct(){}

    public function getIDacademia(){
        return $this -> IDacademia;
    }
    public function getNome(){
        return $this -> nome;
    }

    public function getCnpj(){
        return $this -> cnpj;
    }

    public function getEndereco(){
        return $this -> endereco;
    }

    public function getResponsavel(){
        return $this -> responsavel;
    }

    public function getTelefone(){
        return $this -> telefone;
    }
    
    public function setIDacademia($IDacademia){
        $this -> IDacademia = $IDacademia;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function setCnpj($cnpj){
        $this -> cnpj = $cnpj;
    }

    public function setEndereco($endereco){
        $this -> endereco = $endereco;
    }

    public function setResponsavel($responsavel){
        $this -> responsavel = $responsavel;
    }

    public function setTelefone($telefone){
        $this -> telefone = $telefone;
    }

}

?>