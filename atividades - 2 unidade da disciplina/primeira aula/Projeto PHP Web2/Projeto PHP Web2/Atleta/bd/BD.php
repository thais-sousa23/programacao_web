<?php

	require_once '../../classes/atleta.php';

class BD {

	public function cadastra($atleta) {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "INSERT INTO atleta(nome, telefone, dataNascimento, email, senha, ID_sexo, ID_academia) 
		VALUES ('{$atleta->getNome()}','{$atleta->getTelefone()}','{$atleta->getDataNascimento()}',
		'{$atleta->getEmail()}','{$atleta->getSenha()}','{$atleta->getIDsexo()}','{$atleta->getIDacademia()}')";
		
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function autentica($atleta) {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select ID_atleta from atleta where email = '{$atleta->getEmail()}' and senha = '{$atleta->getSenha()}'";
        //print $sql;
        
        $linhas = mysqli_query($bd, $sql);
        mysqli_close($bd);
        if (mysqli_num_rows($linhas) == 1)
            return true;
        else
            return false;
    }

	public function seleciona($atleta) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from atleta";
		$dados = mysqli_query($bd, $sql);
		$arrayAtletas = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new atleta();
			$c -> setIDatleta($linha['ID_atleta']);
			$c -> setNome($linha['nome']);
			$c -> setTelefone($linha['telefone']);
			$c -> setEmail($linha['email']);
			$c -> setDataNascimento($linha['dataNascimento']);
			$c -> setIDsexo($linha['ID_sexo']);
			$c -> setIDacademia($linha['ID_academia']);
			$arrayAtletas[$i] = $c;
		}
		return $arrayAtletas;
	}	
}
?>