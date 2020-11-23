<?php 
include_once("sistem/conexao.php");
  try
	{
        $sql = $cox->query("select DISTINCT id_venda_itemvenda, id_produto_itemvenda, valor_itemvenda from itemvenda where id_venda_itemvenda =  ".$idVenda);
      

	    $total = 0;
	  echo "";
		if($sql->rowCount() != 0)
		{
			foreach($sql as $row)
			{
                $sqlX = $cox->query('SELECT DISTINCT id_produto_itemvenda  FROM itemvenda
                ');
                
               $contag = $cox->query("select * from itemvenda where id_venda_itemvenda = $idVenda and id_produto_itemvenda = $row[1]");
                
               
                $sql1 = $cox->query("select * from produto where id_produto=". $row[1]);
                
                                      foreach($sql1 as $row1){
                                          $qtde =$contag->rowCount();;
                                          
                                        
                                            $sql2 = $cox->query('select * from fotoproduto where id_produto = '.$row1[0].' limit 1');
                                            
                                            
                                                

                                                
                                              foreach($sql2 as $row2){
                                                    $tt = $row[2] * $qtde;
                                                echo  "
                                                <tr valign='top' align='left'>
                                                                  <td width='55px' align='left' class='cart-dashed-line-border'>
                                                                      <a href='detail.php?prod=".$row1[0]."'>
                                                                      
                                                                          <img width='55' src='img/$row1[0]/$row2[2]' class='imageBorder'>
                                                                      
                                                                      </a>
                                                                  </td> 
                        
                                                                  <td class='cart-dashed-line-border' width='100%'> 
                                                                      <div class='productTitle'>
                                                                          $row1[1]
                                                                      </div>
                                                                    
                                                                      <a href='sistem/delItem.php?idItem=$row[1]'><div style='color:black!important;' class='iluria-cart-mini-button'>
                                                                          <div  class='productVariation'><i class='fa fa-times-circle' style='color:red;'></i>Remover</div>
                                                                      </div></a>
                                                                      
                                                                  </td> 
                                                                  
                                                                  <td align='right' class='cart-dashed-line-border'>
                                                                      <span class='productQuantity'>
                                                                          <input type='text' id='7E4D66269E313_quantity' value='$qtde' class='productQuantityField' disabled>
                                                                      </span>
                                                                      <span class='iluria-cart-mini-button'>
                                                                          <a id='update-quantity-button-7E4D6640393843' style='display:none' href='javascript: Iluria.inlineCart.updateQuantity('7E4D66',document.getElementById('7E4D66269E313_quantity').value,  40393843);'>
                                                                              confirmar
                                                                          </a>
                                                                      </span>
                                                                  </td>
                                                                <td align='right' class='cart-dashed-line-border'> 
                                                                      <span class='productUnitPrice'>$row1[6]</span>
                                                                </td>
                        
                                                                <td align='right' class='cart-dashed-line-border'>
                                                                      <span class='productTotalPrice'> $tt</span>
                                                                  
                                                                  </td>
                        
                                                              </tr>
                        
                                            </tr>
                        
                                                            
                                              ";
                                              $total = $total + ($row[2] * $qtde);

                                                  
                                              }
                        
                    }
                            
                        
                    
                    
                      
                    
                                       
                                       

			}
		}else{
      
      echo '<script type="text/javascript"> 
     
      alert("Você não possuí produtos");
      location.replace("index.php");
      </script>';
		}

	}catch( PDOException $erro ){
		//echo $erro->getMessage();
    }finally{
        
        
    }

    if(isset($_GET['acao'])){
       echo '<script> window.location.replace("carrinho.php") </script>';
    }
        
    
   
    
  ?>
  
  <tr class='cartHeader'> 
                                        <td colspan='4' align='right'>
						                    Total:
                                        </td>

                                        <td align='right'>
                                            <span class='cart-products-total-price'> <?php echo $total?></span>
                                        
                                        </td>
    <!--<tr>
      <th scope="col"></th>
      <th scope="col">Total</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
	  
  </tbody>
</table>

<a href="sistema.php?idVenda=&tela=finalizar" class="btn btn-success my-2 my-sm-0">Finalizar Compra</a>-->