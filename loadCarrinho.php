<?php 

include_once("sistem/conexao.php");


$idVenda = 0;

	
	
	try
	{
		$sql = $cox->query("select * from venda
						where id_cliente_venda = ".$idClient." and status_venda = '1'");
	
		if($sql->rowCount() == 1)
		{
			foreach($sql as $row)
			{
				$idVenda = $row[0];
				$idPedido =  "Venda aberta ".$idVenda;
			}
		}else{
	
			$sql2 = $cox->prepare
			('
				insert into venda
					(id_cliente_venda,status_venda)
				values
					(:id_cliente_venda,:status_venda)
			');
	
			$sql2->execute
			(
				array
				(
					':id_cliente_venda' => $idClient,
					':status_venda' => "1"
				)
			);
	
			
	
		}
	
	}catch( PDOException $erro ){
		//echo $erro->getMessage();
	}
	
	/* FIM carrega o ID da venda ou cria uma venda Nova*/
	
	/* INICIO Inicia a inserção do ID FILME na Tabela Item*/
	
	if(isset($_GET['idProd']))
	{
	
		$idProdCarrinho = $_GET['idProd'];
	
		//echo "ID Filme - ".$idProdCarrinho;
		//echo '<hr>';
	
	
		try
		{
			$sql = $cox->query("select * from produto where id_produto = ".$idProdCarrinho);
	
			foreach($sql as $row)
			{
				$id_prod = $row[0];
				$nome_prod = $row[1];
				$desc_prod = $row[2];
				$preco_prod = $row[6];
				
			}
	
		}catch( PDOException $erro ){
			//echo $erro->getMessage();
		}
	
		try
		{
			$sql = $cox->prepare
			('
				insert into itemvenda
					(id_venda_itemvenda,id_produto_itemvenda,valor_itemvenda, qtde_itemvenda)
				values
					(:id_venda_itemvenda,:id_produto_itemvenda,:valor_itemvenda, :qtde_itemvenda)
			');
	
			$sql->execute
			(
				array
				(
					':id_venda_itemvenda' => $idVenda,
					':id_produto_itemvenda' => $idProdCarrinho,
					':valor_itemvenda' => $preco_prod,
					':qtde_itemvenda' => '1'
					
				)
			);
	
			if($sql->rowCount() == 1)
			{
				//echo '<hr>filme cadastrado no carrinho com sucesso<br>';
			}
	
		}catch( PDOException $erro ){
			//echo $erro->getMessage();
		}
	}
	/* FIM Inicia a inserção do ID FILME na Tabela Item*/



?>


  





