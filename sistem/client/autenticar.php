<?php 




$idClient = "";



session_start();

if(isset($_SESSION['name']))
{
	$idClient = $_SESSION['id'];
    $x = 'Olá, ' . $_SESSION['name'];
	echo $x;

}else{
	
	echo 'Olá, visitante' ;
}
?> 
