<?php

	require_once '../../classes/campeonato.php';

class BD {

	public function cadastra($campeonato) {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "INSERT INTO campeonato(nome, local, data, organizador) 
		VALUES ('{$campeonato->getNome()}','{$campeonato->getLocal()}','{$campeonato->getData()}','{$campeonato->getOrganizador()}')";
		
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($campeonato) {

	}

	public function atualiza($campeonato) {

	}

	public function seleciona($campeonato) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from campeonato";
		$dados = mysqli_query($bd, $sql);
		$arrayCampeonato = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new Campeonato();
			$c -> setIDcampeonato($linha['ID_campeonato']);
			$c -> setNome($linha['nome']);
			$c -> setLocal($linha['local']);
			$c -> setData($linha['data']);
			$c -> setOrganizador($linha['organizador']);
			$arrayCampeonato[$i] = $c;
		}
		return $arrayCampeonato;
	}	
}
?>