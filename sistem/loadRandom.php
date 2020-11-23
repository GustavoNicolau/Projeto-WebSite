
<div class="sub-header col-md-12 col-xs-12">
    Veja mais aqui 
</div>

<div class="see-also-wrapper">


<?php 

try{

$sql = $cox->query("select * from produto ORDER by rand() limit 8 ");

foreach($sql as $row)
{

    $sql1 = $cox->query('select * from fotoproduto where id_produto = '.$row[0].' limit 1');
    foreach ($sql1 as $row1)
    {
        echo '
        <div style="max-height: 120px!important;" class="see-also-container col-md-3 col-xs-6">
            <a href="detail.php?prod='.$row[0].'">
                <img src="img/'.$row[0].'/'.$row1[2].'" style="min-height:76px!important; max-height:76px!important" height="76px" border="0" class="img-responsive">
            </a>

            <a href="detail.php?prod='.$row[0].'"  class="no-mobile"> 
                <h3  class="h5">  </h3>
            </a>
        </div>
     
        ';
    }
}
}catch(Exception $e){
    
}
?>

</div>