<?php

class atleta {
    private $IDatleta;
    private $nome;
    private $telefone;
    private $dataNascimento;
    private $email;
    private $senha;
    private $IDsexo;
    private $IDacademia;

    public function getIDatleta (){
        return $this-> IDatleta;
    }

    public function getNome (){
        return $this-> nome;
    }

    public function getTelefone (){
        return $this-> telefone;
    }

    public function getDataNascimento (){
        return $this-> dataNascimento;
    }

    public function getEmail(){
        return $this-> email;
    }

    public function getSenha(){
        return $this-> senha;
    }

    public function getIDsexo(){
        return $this-> IDsexo;
    }

    public function getIDacademia(){
        return $this-> IDacademia;
    }

    public function setIDatleta($IDatleta){
        $this-> IDatleta = $IDatleta;
    }

    public function setNome($nome){
        $this-> nome = $nome;
    }

    public function setTelefone($telefone){
        $this-> telefone = $telefone;
    }

    public function setDataNascimento($dataNascimento){
        $this-> dataNascimento = $dataNascimento;
    }

    public function setEmail($email){
        $this-> email = $email;
    }

    public function setSenha($senha){
        $this-> senha = $senha;
    }

    public function setIDsexo($IDsexo){
        $this-> IDsexo = $IDsexo;
    }

    public function setIDacademia($IDacademia){
        $this-> IDacademia = $IDacademia;
    }
}
?>