<?php

    require_once '../../classes/categoria_idade.php';

class BD{
    
    public function cadastra($idade){
        $bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
        $sql = "INSERT INTO categoria_idade(nome, idade_minima, idade_maximo)    
        VALUES ('{$idade -> getNome()}', '{$idade -> getIdadeMinima()}', '{$idade -> getIdadeMaximo()}')";

        print 'Cadastro realizado com sucesso!!!';

        mysqli_query($bd, $sql);

        mysqli_close($bd);
    }

    public function apaga($idade) {

	}

	public function atualiza($idade) {

	}

	public function seleciona($idade) {

	}

	public function selecionaTodos() {
        $bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from categoria_idade";
		$dados = mysqli_query($bd, $sql);
		$arrayIdade = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new Idade();
			$c -> setIDidade($linha['ID_idade']);
			$c -> setNome($linha['nome']);
			$c -> setIdadeMinima($linha['idade_minima']);
            $c -> setIdadeMaxima($linha['idade_maximo']);
			
			$arrayIdade[$i] = $c;
		}
		return $arrayIdade;
	}
} 

?>