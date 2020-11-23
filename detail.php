
<?php 

if(!isset($_GET['prod'])){
    header('location:index.php');
}

?>
<?php include('header.php'); ?>

<div class="conteudo-geral">
    <div class="container">
        <div id="product-details-wrapper" class="col-xs-12 col-md-12">
            <div class="product-details-container row"> 
                <div class="product-details-container-td-pictures col-md-6 col-xs-12">
                
                                  <?php include('sistem/loadphotos.php'); ?>
                  
                  
                  
                          
                       
                

                <div class="product-details-container-td-description col-md-6 col-xs-12">
                        <div class="product-details-description-wrapper" style="position: relative;">
                             <div id="zoom-position"></div>
                             <?php include('sistem/loadDetail.php') ?>
                             <div class="row">
                                          <div class="col-md-12">
                                                <h1 class="product-title"> <?php echo "$nome"; ?> </h1>
                                          </div>
                             </div>
                                           
                             <div class="row">
                                    <div class="butons col-xs-12">
                                          <div class="buy-box">
                                                <div class="col-md-6">
                                                    <div class="product-price-container">
                                                        <div style="margin-top:25px!important;" class="iluria-product-price" id="iluria-product-price">
                                                            <span class="product-price-currency">Preço : R$</span>
                                                            <span class="product-price-text"><?php echo "$preco"; ?></span>
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div id="product-buy-button-container" class="col-md-6">
                                                        <a href="carrinho.php?idProd=<?php echo $idProd?>&acao=ADD"> <div style="background-color: #F95035" class="button buy-button-text">
                                                            Adicionar ao Carrinho
                                                        </div></a>
                                                    </div>

                                               
                                          </div>
                                    </div>
                             </div>

                             <div class="row">
                                    <div class="col-md-12">
                                          <div class="product-description border">
                                            <p>
                                                <?php echo "$desc"; ?>

                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>

                                                
                                                Dúvidas entre em contato:
                                                <br>
                                                <a href="https://www.facebook.com/nerdlandiaoficial" style="color:black" target="_blank">
                                                    facebook.com/nerdlandia
                                                </a>

                                                <br>

                                                nerd@nerdlandia.com
                                                <br>
                                                Wpp.: (11) 97313-2313
                                            </p>
                                          </div>
                                    </div>
                             </div>


                             <div class="row">
                                <div class="col-md-12 col-xs-12">
                            
                                    <div class="product-social-media-buttons">
                                        <p>Gostou? Compartilhe:</p>
                                            <div id="share-buttons">
                                    
                                                <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://www.nerdlandia.com.br/">
                                        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email">
                                    </a>
                                    
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/sharer.php?u=http://www.nerdlandia.com.br/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook">
                                    </a>
                                    
                                    <!-- Google+ -->
                                    <a href="https://plus.google.com/share?url=http://www.nerdlandia.com.br/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google">
                                    </a>
                                    
                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.nerdlandia.com.br/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn">
                                    </a>
                                    
                                    
                                    <!-- Twitter -->
                                    <a href="https://twitter.com/share?url=http://www.nerdlandia.com.br/" target="_blank">
                                        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter">
                                    </a>
                                </div>
                            </div>

                            <?php include('sistem/loadRandom2.php') ?>
                        </div>
                    </div>

                        </div>                          
                </div>

            </div>
        
    </div>
</div>
<script>
			function thumbMouseOver(elem) {
				var $this = $(elem);
				var secondUrl = $this.attr("data-second-image");
				$this.attr("data-second-image", $this.css("background-image"));
				var element = $this;
				var secondImage = new Image();
				secondImage.src = secondUrl ;
				
				if($this.attr("data-image-loaded") == "true"){
					$(element).css("background-image", "url('"+secondImage.src+"')");
				}
				else{
					secondImage.onload = function(){
						$(element).css("background-image", "url('"+secondImage.src+"')");
						$(element).attr("data-image-loaded", "true");
					};
				}
			}
			
			function thumbMouseOut(elem) {
				var $this = $(elem);
				var firstImage = $this.attr("data-second-image");
				// Coloco a url da segunda imagem novamente no atributo, retirando o url('')
				var secondImage = $this.css("background-image");
				secondImage = secondImage.replace("url(", "");
				secondImage = secondImage.replace(")", "");
				// caso exista aspas no link (IE)
				secondImage = secondImage.replace("\"", "").replace("\"", "").replace("'", "").replace("'", "");
				$this.attr("data-second-image", secondImage);
				$this.css("background-image", firstImage);
			}
			
			function freeSizeThumbMouseOver(elem) {
				var $this = $(elem);
				var secondUrl = $this.attr("data-second-image");
				$this.attr("data-second-image", $this.attr("src"));
				var element = $this;
				var secondImage = new Image();
				secondImage.src = secondUrl ;
				
				if($this.attr("data-image-loaded") == "true"){
					$(element).attr("src", secondImage.src);
				}
				else{
					secondImage.onload = function(){
						$(element).attr("src", secondImage.src);
						$(element).attr("data-image-loaded", "true");
					};
				}
			} 
			
			function freeSizeThumbMouseOut(elem) {
				var $this = $(elem);
				var firstImage = $this.attr("data-second-image");
				$this.attr("data-second-image", $this.attr("src"));
				$this.attr("src", firstImage);
			}
			
			$(function(){
			    $(".iluria-product-thumb").bind('mouseenter', function() {
			    	thumbMouseOver($(this));
			    });
			    $(".iluria-product-thumb").bind('mouseleave', function() {
			    	thumbMouseOut($(this));
			    });
			
			    $(".iluria-product-thumb-img").bind('mouseenter', function() {
			        freeSizeThumbMouseOver($(this));
			    });
			    $(".iluria-product-thumb-img").bind('mouseleave', function() {
			        freeSizeThumbMouseOut($(this));
			    });
			});
			
			
		</script>
<?php include('footer.php'); ?>