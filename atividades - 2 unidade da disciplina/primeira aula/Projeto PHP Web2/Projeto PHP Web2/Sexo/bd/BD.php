<?php

	require_once '../../classes/categoria_sexo.php';

class BD {

	public function cadastra($sexo) {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "INSERT INTO categoria_sexo(genero) VALUES ('{$sexo->getGenero()}')";
		
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($sexo) {

	}

	public function atualiza($sexo) {

	}

	public function seleciona($sexo) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from categoria_sexo";
		$dados = mysqli_query($bd, $sql);
		$arraySexo = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new Sexo();
			$c -> setIDsexo($linha['ID_sexo']);
			$c -> setGenero($linha['genero']);
			
			$arraySexo[$i] = $c;
		}
		return $arraySexo;
	}	
}
?>