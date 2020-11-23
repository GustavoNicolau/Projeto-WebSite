

<?php 

include ("conexao.php");


try{


    $sql = $cox->query('select * from categoria  limit 18446744073709551610  OFFSET 6');

    foreach($sql as $row)
    {
        echo ' <li><a href="index.php?cat='.$row[0].'">'.$row[1].'</a></li>';
    }

}catch(Exception $e){

}