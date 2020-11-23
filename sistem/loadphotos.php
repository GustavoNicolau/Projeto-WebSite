
<div id="big-image-container" style="position: relative;" oncontextmenu="return false;">   
                        <div onclick="zshowZoomImageFancybox()">
<?php 


include_once('conexao.php');
$id = $_GET['prod'];
$n = 0;
if(isset($_GET['prod']))

{
try{

    $sql = $cox->query("select * from fotoproduto where id_produto = '". $_GET["prod"]. "' limit 1 ");
    $sql1 = $cox->query("SELECT * FROM fotoproduto where id_produto = ".$_GET["prod"]."  limit 18446744073709551610");
    
    foreach ($sql as $row)
    {
        echo ' <img src="img/'.$id.'/'.$row[2].'" style="max-height: 500px!important" id="big-image" class="cloudzoom img-responsive" data-cloudzoom="captionSource:", zoomSizeMode: "zoom", tintColor: "rgba(255,255,255,0.8)", zoomPosition: "#zoom-position" border="0" alt="foto '.$row[2].'" title="" iluria-product-picture-id=" '.md5($n. $row[0]).'" iluria-product-id="'.md5($n. $row[0]).'" iluria-product-variation-id="">';

        echo '</div>
        </div>
        
        ';
      
    }
            echo '<div id="thumbsContainer">';
    foreach($sql1 as $row1)
    {
        $n = $n + 1;
        echo '                                          
      
          <img class="thumb-picture hand-cursor" height="55px" src="img/'.$id.'/'.$row1[2].'" mainpictureurl="img/'.$id.'/'.$row1[2].'" pictureid="'.md5($n. $row1[0]).'" variationid="" onclick="loadThumb2(this);">
        ';
    }

   

}catch(Exception $e){

}

                     

}
?>
<img class="thumb-picture hand-cursor" src="" mainpictureurl="" pictureid="" variationid="" style="display:none" onclick="loadThumb2(this);">
<img class="thumb-picture hand-cursor" src="" mainpictureurl="" pictureid="" variationid="" style="display:none" onclick="loadThumb2(this);">

</div>
</div>
</div>
