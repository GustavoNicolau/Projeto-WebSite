<?php



include('header.php');
if(isset($_SESSION['name']))
{
   
	
}else{
    echo '<script type="text/javascript"> 
   
    location.replace("login.php");
    
    </script>';
}


?>
<?php include('loadCarrinho.php') ?>
    <div class="conteudo-geral">
        <div class="container">
            <div class="cart-container">
                <div class="iluria-cart-title">
                    Meu pedido - <?php echo $idVenda ?>
                </div>

                <table width="100%" cellpadding="0" cellspacing="0" style="padding-top: 10px"> 
                    <tbody>
                        <tr valign="top"> 
                            <td> 
                                <table width="100%" class="cart" cellspacing="0" cellpadding="5">
                                    <tbody> 
                                        <tr class="cartHeader" valign="middle"> 
                                            <td colspan="2" class="cart-dashed-line-border">
                                                Produto
                                            </td>

                                          
                                            <td width="90px" align="right" class="cart-dashed-line-border">
	    				                        Quantidade
	    			                        </td>
                                            <td width="110px" align="right" class="cart-dashed-line-border cart-item-unit-price">
                                                    Valor unitário
                                            </td>

                                            <td width="90px" align="right" class="cart-dashed-line-border  cart-item-total-price">
                                                Valor total
                                            </td>

                                        </tr>

                                        <?php
                                       include('loadCarrinho2.php');
                                        include('sistem/PagMP.php');
                                        ?>
                                        
                                        
                                        
                                    </tbody>
                                </table>

                                <table width="100%" cellspacing="0" cellpadding="0"> 
                                    <tbody> 
                                        <tr style="padding-top:10px;"> 
                                            <td width="340"  align="left"> 
                                                <div id="submitButton" style="padding-top: 5px; text-align: right;">
                                                    <a href="index.php"><div class="iluria-cart-button button" style="margin-right: 10px;"> Escolher mais produtos</div></a>
                                                </div>
                                            </td>

                                            <td align="right" style="text-align:right"> 
                                                <div style="clear: both; text-align: right;" id="cart-buttons">
                                                    <form style="font-family: abel; "   action="/controllers/PaymentController2.php" method="POST">
                                                                 <script
                                                                                    src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
                                                                                    data-preference-id="<?php echo $preference->id; ?>">
                                                                            </script>
                                                                            
                                                                        
                                                    </form>
	                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <?php include('sistem/loadRandom2.php') ?>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>