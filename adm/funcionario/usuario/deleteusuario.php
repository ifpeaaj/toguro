<?php

 


include '../../conexao/conexao.php';
  
  
try{
$stmt = $conexao->prepare("delete from tbl_usuario where id_matricula = ?");


$id_matricula= $_GET["id_matricula"]; 
 
   
$stmt -> bindParam(1,$id_matricula);    


$stmt->execute(); 

if($stmt->rowCount() >0){
	 echo "Usuario Excluido com Sucesso";
	}else{
	 echo "Usuario Não Excluido !";	
	}	



echo "Deletado com sucesso.";

header("Location: ../index.php");


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

