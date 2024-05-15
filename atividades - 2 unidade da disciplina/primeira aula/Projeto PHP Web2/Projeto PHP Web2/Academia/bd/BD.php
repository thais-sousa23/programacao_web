<?php

	require_once '../../classes/academia.php';

class BD {

	public function cadastra($academia) {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "INSERT INTO academia(nome, cnpj, endereco, responsavel, telefone) 
		VALUES ('{$academia->getNome()}','{$academia->getCnpj()}','{$academia->getEndereco()}','{$academia->getResponsavel()}','{$academia->getTelefone()}')";
		
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	

	public function apaga($atleta) {

	}

	public function atualiza($atleta) {

	}

	public function seleciona($atleta) {

	}

	public function selecionaTodos() {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from academia";
		$dados = mysqli_query($bd, $sql);
		$arrayAcademia = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new Academia();
			$c -> setIDacademia($linha['ID_academia']);
			$c -> setNome($linha['nome']);
			$c -> setCnpj($linha['cnpj']);
			$c -> setEndereco($linha['endereco']);
			$c -> setResponsavel($linha['responsavel']);
			$c -> setTelefone($linha['telefone']);
			$arrayAcademia[$i] = $c;
		}
		return $arrayAcademia;
	}	
}
?>