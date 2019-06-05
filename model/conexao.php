<?php
  $host = "mysql:host=localhost;dbname=sistemapoo;charset=utf8mb4;port=8889";
  $db_user = 'root';
  $db_pass = 'root';

  try{
   $con = new PDO($host,$db_user,$db_pass); 
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
   echo "Ops, deu ruim";

   echo $e->getMessage();
 }