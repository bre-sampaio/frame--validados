<?php


function visualizar(){
		$vetor = array();
		$vetor['nome'] = "tenis";
		$vetor['descricao'] = "lindo";
		$vetor['preco'] = "50";
		exibir("produto/visualizar",$vetor);
	}


function adicionar(){
	
	if (ehPOST()) {

	//validação do email

		$input['Email'] =
			filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
 	if ($input['Email'] == FALSE) {
 		echo 'Informe um email valido. <br><BR>';
	}
		$email = $_POST["Email"];

 	//validação da senha

	if (strlen(trim($_POST['senha'])) == 0) {
 		echo "Você deve inserir uma senha válida.<br><BR>";
	}
		$senha = $_POST["senha"];
		

	//validação do nome
		
		$input['user'] =
			filter_input(INPUT_POST, 'user', FILTER_VALIDATE_EMAIL);
 	if ($input['user'] == FALSE) {
 		echo 'Informe um nome valido. <br><BR>';
	}
		$nome = $_POST["user"];


	//validação do cpf
		
		$input['cpf'] =
			filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_EMAIL);
 	if ($input['cpf'] == FALSE) {
 		echo 'Informe um cpf valido. <br><BR>';
	}
		$cpf = $_POST["cpf"];
	

	//validação do cpf
		
		$input['Data'] =
			filter_input(INPUT_POST, 'Data', FILTER_VALIDATE_EMAIL);
 	if ($input['Data'] == FALSE) {
 		echo 'Informe uma Data valida. <br><BR>';
	}
		$data = $_POST["Data"];


	} else {
		exibir("produto/formulario");
	}
	
	
} 









?>