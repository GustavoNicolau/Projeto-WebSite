<?php 

$host="localhost";
$banco="projeto";
$user="root";
$pass="";

try{
	
	$cox = new PDO("mysql:dbname=$banco;host=$host",$user,$pass);
	$cox->setAttribute (PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$cox->exec("set names utf8");
	
	
}catch(PDOException $e){
	
	echo $e->getMessage();
	
}

?>