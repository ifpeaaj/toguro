<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>



<?php

include '../conexao/conexao.php';
  
try{
$stmt = $conexao->prepare("delete from tbl_usuario where id_matricula = ?");


$id_matricula= $_GET["id_matricula"]; 
 
   
$stmt -> bindParam(1,$id_matricula);    


$stmt->execute(); 

  if($stmt->rowCount() >0){
			 echo '<script>
						alert("Usu�rio excluido com sucesso!");
						location.href="../index.php"
					</script>';
			}else{
			 echo '<script>
						alert("Erro ao excluir Usu�rio!");
					</script>';
			}	


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

