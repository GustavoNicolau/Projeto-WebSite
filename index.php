
<?php include('header.php') ?>
                                        </div>
                                                        
<div class="conteudo-geral">
    <div class="container">
        <div class="featured-products-title">
            <center>
                <span class="h2"> Nosso Produtos </span>
            </center>
        </div>

        <div class="index-product-list-container">
                <style>
                    @media (max-width: 769px){
                        .product-wrap{
                            width: 50%;
                        margin: 15px 0;
                        float: left;
                        text-align: center;}
                    .iluria-product-thumb{max-height: 165px;}
                    }
                    
                    @media (max-width: 340px){
                        .iluria-product-thumb {
                            max-height: 115px!important;
                    }
                    }
                    
                    @media (min-width: 769px){
                        .product-wrap{
                        width: 25%;
                        margin: 15px 0;
                        float: left;
                        text-align: center;}
                    }
                    
                    .product-item-container {width: 100%; overflow:hidden;} 
                    
                    
                    
                    .iluria-product-thumb { width: 100% !important; }
             </style>
         <!-- produtos abaixo -->
        
            <div id="product-list-container">
            <?php include('sistem/loadproduct.php') ?>
           
                <?php include('sistem/loadRandom2.php') ?>
                
                
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>