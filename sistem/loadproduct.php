<?php

include("conexao.php");
if(isset($_GET['cat'])){
    
    
    try{

        $sql = $cox->query("select * from produtocategoria where id_categoria_produtocategoria = ".$_GET['cat']." ");
       
        foreach($sql as $row)
        {
    
            $sql1 = $cox->query('select * from produto where id_produto = '.$row[2].'');
            foreach ($sql1 as $row1)
            {
                $idProd = $row1[0];
                $sql2 = $cox->query('select * from fotoproduto where id_produto = '.$row1[0].' limit 1');
                foreach($sql2 as $row2){
                   
                echo '
                
                <div class="product-wrap" style="height:340px;">
                    <div class="product-item-container" style="height:309px">
                        <div class="product-item-container-inner">
                            <a href="detail.php?prod='.$row1[0].'">
                                <div class="product-thumb-container">
                                    <div class="product-thumb-image-container">
                                        <div title="'.$row1[1].'" class="iluria-product-thumb" style="background-repeat: no-repeat; background-position: center center; width: 215px; height: 204px; background-size: cover; background-image: url(img/'.$row1[0].'/'.$row2[2].');"> </div>
                                    </div>
                                </div>
                            </a>
    
                            <div class="product-thumb-caption-container">
                                <div class="iluria-layout-search-product-title col-xs-12">
                                    <a href="detail.php?prod='.$row1[0].'">
                                       '.$row1[1].' 
                                    </a>    
                                </div>
    
                                <div class="col-md-12 col-xs-12">
                                    <div class="product-thumb-price-container">
                                        <div class="product-thumb-price">
                                            <span class="product-price-currency"> R$ </span>
                                            <span class="product-price-text"> '.$row1[6].' </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
                }
            }
    
        }
    
    }catch(PDOExcepition $e){
      
    } 
}
else{
   
}

if(isset($_GET['search']))
{
    try{

        $sql = $cox->query("select * from produto where nome_produto like '%".$_GET['search']."%' ORDER by id_produto DESC  ");
       
        foreach($sql as $row)
        {
    
            $sql1 = $cox->query('select * from fotoproduto where id_produto = '.$row[0].' limit 1');
            foreach ($sql1 as $row1)
            {
                echo '
                
                <div class="product-wrap" style="height:340px;">
                    <div class="product-item-container" style="height:309px">
                        <div class="product-item-container-inner">
                            <a href="detail.php?prod='.$row[0].'">
                                <div class="product-thumb-container">
                                    <div class="product-thumb-image-container">
                                        <div title="'.$row[1].'" class="iluria-product-thumb" style="background-repeat: no-repeat; background-position: center center; width: 215px; height: 204px; background-size: cover; background-image: url(img/'.$row[0].'/'.$row1[2].');"> </div>
                                    </div>
                                </div>
                            </a>
    
                            <div class="product-thumb-caption-container">
                                <div class="iluria-layout-search-product-title col-xs-12">
                                    <a href="detail.php?prod='.$row[0].'">
                                       '.$row[1].' 
                                    </a>    
                                </div>
    
                                <div class="col-md-12 col-xs-12">
                                    <div class="product-thumb-price-container">
                                        <div class="product-thumb-price">
                                            <span class="product-price-currency"> R$ </span>
                                            <span class="product-price-text"> '.$row[6].' </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
    
        }
    
    }catch(PDOExcepition $e){
      
    } 
}

if(!isset($_GET['search']) && !isset($_GET['cat']))
{
    try{

        $sql = $cox->query("select * from produto ORDER by id_produto DESC ");
       
        foreach($sql as $row)
        {
    
            $sql1 = $cox->query('select * from fotoproduto where id_produto = '.$row[0].' limit 1');
            foreach ($sql1 as $row1)
            {
                echo '
                
                <div class="product-wrap" style="height:340px;">
                    <div class="product-item-container" style="height:309px">
                        <div class="product-item-container-inner">
                            <a href="detail.php?prod='.$row[0].'">
                                <div class="product-thumb-container">
                                    <div class="product-thumb-image-container">
                                        <div title="'.$row[1].'" class="iluria-product-thumb" style="background-repeat: no-repeat; background-position: center center; width: 215px; height: 204px; background-size: cover; background-image: url(img/'.$row[0].'/'.$row1[2].');"> </div>
                                    </div>
                                </div>
                            </a>
    
                            <div class="product-thumb-caption-container">
                                <div class="iluria-layout-search-product-title col-xs-12">
                                    <a href="detail.php?prod='.$row[0].'">
                                       '.$row[1].' 
                                    </a>    
                                </div>
    
                                <div class="col-md-12 col-xs-12">
                                    <div class="product-thumb-price-container">
                                        <div class="product-thumb-price">
                                            <span class="product-price-currency"> R$ </span>
                                            <span class="product-price-text"> '.$row[6].' </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
    
        }
    
    }catch(PDOExcepition $e){
      
    } 
}

?>