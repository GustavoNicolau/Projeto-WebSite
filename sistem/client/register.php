<?php 

include_once("../conexao.php");

if($_POST){


  
    $name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$pass = $_POST['txtPass'];
	
	
	
	try
	{
		$sql = $cox->prepare
		('
			insert into cliente
				(nome_cliente,email_cliente,senha_cliente)
			values
				(:name,:email,:pass)
		');
			
		$sql->execute
		(
			array
			(
				
                        ':name' => $name,
                        ':email' => $email,
                        ':pass' => $pass
			)
		);
		
		if($sql->rowCount() == 1)
		{
			echo "cadastro feito com sucesso";
		}
			
	}catch( PDOException $erro ){
		echo $erro->getMessage();
	}

}
?>
