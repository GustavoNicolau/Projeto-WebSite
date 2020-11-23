<?php 

include_once("conexao.php");

if(isset($_GET['idItem'])){
	
	

	try
	{
		$sql = $cox->query('delete from itemvenda where id_produto_itemvenda= ' . $_GET['idItem']);
			
		
		
		if($sql->rowCount() == 1)
		{
			header('location:../carrinho.php');
		}
			
	}catch( PDOException $erro ){
		echo $erro->getMessage();
	}finally{
        header('location:../carrinho.php');
    }

}else{
	echo "É necessário enviar as informção para fazer o cadastro!<br>";
	echo "<a href='sistema.php?tela=funcionario'>Voltar</a>";
}
?>