<?php

	require_once '../../classes/categoria_peso.php';

class BD {

	public function cadastra($peso) {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "INSERT INTO categoria_peso(nome, ID_sexo, ID_idade, peso_maximo) 
		VALUES ('{$peso->getNome()}','{$peso->getIDsexo()}','{$peso->getIDidade()}','{$peso->getPesoMaximo()}')";
		
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($peso) {

	}

	public function atualiza($peso) {

	}

	public function seleciona($peso) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from categoria_peso";
		$dados = mysqli_query($bd, $sql);
		$arrayPeso = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new Peso();
			$c -> setIDpeso($linha['ID_peso']);
			$c -> setNome($linha['nome']); //mudar nome no BD para "nome".
			$c -> setIDsexo($linha['ID_sexo']);
			$c -> setIDidade($linha['ID_idade']);
			$c -> setpesoMaximo($linha['peso_maximo']);
			
			$arrayPeso[$i] = $c;
		}
		return $arrayPeso;
	}	
}
?>