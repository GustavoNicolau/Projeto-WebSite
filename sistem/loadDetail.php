<?php 


include_once('conexao.php');
$id = $_GET['prod'];

if(isset($_GET['prod']))

{
try{

    $sql = $cox->query("select * from produto where id_produto = '". $_GET["prod"]. "' ");
   
    
    foreach ($sql as $row)
    {
        $idProd = $row[0];
        $preco = $row[6];
        $nome = $row[1];
        $desc = $row[2];
      
    }
        

   

}catch(Exception $e){

}

                     

}
?>