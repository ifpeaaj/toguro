<?php

 



  
try{
$conexao = new PDO('mysql:host=localhost;dbname=bd_academia_toguro','root',''); 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 

} 

?>
  
