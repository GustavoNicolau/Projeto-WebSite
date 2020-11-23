             
	<?php 
	
	if($_POST)
	{
		include_once("conexao.php");
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];
	
		try
		{
			$sql = $cox->query("select * from cliente where
				email_cliente='".$email."' and
				senha_cliente='".$senha."'
			");

			if($sql->rowCount() == 1)
			{
				
				
               session_start();
				
				foreach($sql as $row)
				{
                   
					$_SESSION['id'] = $row[0];
					$_SESSION['name'] = $row[1];		
					
                    header("location:../index.php");
				}
			}else{
               
				

				header('location:../login.php');

				echo'<script> 
				alert("ÚSUARIO OU SENHA INVÁLIDOS
				
				</script>';
			}

		}catch( PDOException $erro ){
			echo $erro->getMessage();
		}
	}

	echo $_SESSION['name'];
	
	?>