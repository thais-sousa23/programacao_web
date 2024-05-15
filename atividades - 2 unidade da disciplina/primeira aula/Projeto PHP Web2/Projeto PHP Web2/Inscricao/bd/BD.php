<?php

	require_once '../../classes/inscricao.php';

class BD {

	public function cadastra($inscricao) {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "INSERT INTO inscricao(ID_atleta, ID_academia, ID_faixa, ID_peso, ID_sexo) 
        VALUES ('{$inscricao->getIDatleta()}','{$inscricao->getIDacademia()}','{$inscricao->getIDfaixa()}',
		'{$inscricao->getIDpeso()}','{$inscricao->getIDsexo()}')";
		
		print 'Cadastro realizado com sucesso!';
		
		mysqli_query($bd, $sql);
		mysqli_close($bd);
	}	


	public function selecionaTodos() {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from inscricao";
		$dados = mysqli_query($bd, $sql);
		$arrayInscricao = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new Inscricao();
			$c -> setIDinscricao($linha['ID_inscricao']);
			$c -> setIDatleta($linha['ID_atleta']);
			$c -> setIDacademia($linha['ID_academia']);
			$c -> setIDfaixa($linha['ID_faixa']);
			$c -> setIDpeso($linha['ID_peso']);
			$c -> setIDsexo($linha['ID_sexo']);
			$arrayInscricao[$i] = $c;
		}
		return $arrayInscricao;
	}	

}	

?>