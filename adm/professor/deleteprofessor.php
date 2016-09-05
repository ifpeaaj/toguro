
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>


<?php
include '../conexao/conexao.php';
  
  
try{
$stmt = $conexao->prepare("delete from tbl_professor where cod_professor = ?");


$cod_prof= $_GET["cod_professor"]; 
 
   
$stmt -> bindParam(1,$cod_prof);    


$stmt->execute(); 

  if($stmt->rowCount() >0){
			 echo '<script>
						alert("Professor excluido com sucesso!");
						location.href="../index.php"
					</script>';
			}else{
			 echo '<script>
						alert("Erro ao excluir Professor!");
					</script>';
			}	



}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

