<?php

require_once '../../classes/categoria_faixa.php';

class BD
{

    public function cadastra($faixa)
    {
        $bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
        $sql = "INSERT INTO categoria_faixa(cor, ID_idade)    
        VALUES ('{$faixa->getCor()}','{$faixa->getIDidade()}')";

        print 'Cadastro realizado com sucesso!!!';
        
		mysqli_query($bd, $sql);
        mysqli_close($bd);
    
    }

	public function seleciona($faixa) {

    }

    public function selecionaTodos() {
		$bd = mysqli_connect("localhost", "root", "admin", "amaurirobsonteam");
		$sql = "select * from categoria_faixa";
		$dados = mysqli_query($bd, $sql);
		$arrayFaixas = [];
		for ($i = 0; $i < mysqli_num_rows($dados); $i++){
			$linha = mysqli_fetch_array($dados);
			$c = new Faixa();
			$c -> setIDfaixa($linha['ID_faixa']);
			$c -> setCor($linha['cor']);
			$c -> setIDidade($linha['ID_idade']);
			
			$arrayFaixas[$i] = $c;
		}
		return $arrayFaixas;
	}	

}
    
?>
