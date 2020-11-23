<?php 

include ("conexao.php");


try{


    $sql = $cox->query('select * from categoria  limit 6');

    foreach($sql as $row)
    {
        echo ' 
            <li>
        
                    <a href="index.php?cat='.$row[0].'" >'.strtoupper($row[1]).'</span></a>
            </li>';
    }

}catch(Exception $e){

}