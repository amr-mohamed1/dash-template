<?php 

$dsn = "mysql:host=localhost;dbname=gam3ety";
$user = "root";
$pass="";

try{
    $con = new PDO($dsn , $user , $pass);
   
}catch(PDOException $e){
    echo "error" . $e->getMessage();
}




?>

