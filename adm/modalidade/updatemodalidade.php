<?php

 



include '../conexao/conexao.php';
  
try{
$stmt = $conexao->prepare("update tbl_modalidade
set nome_modalidade=? ,qtd_vagas_modalidade=?,turno_modalidade=?,horario_modalidade=? where id_modalidade = ?");


$nome= $_POST["nome_modalidade"]; 
$qtd_vagas= $_POST["qtd_vagas_modalidade"]; 
$turno= $_POST["turno_modalidade"];  
$horario= $_POST["horario_modalidade"]; 
$id_mod= $_GET["id_modalidade"]; 

$stmt -> bindParam(1,$nome);
$stmt -> bindParam(2,$qtd_vagas);
$stmt -> bindParam(3,$turno);
$stmt -> bindParam(4,$horario);
   
$stmt -> bindParam(5,$id_mod);    


$stmt->execute(); 


  if($stmt->rowCount() >0){
			 echo '<script>
						alert("Modalidade alterada com sucesso!");
						location.href="../index.php"
					</script>';
			}else{
			 echo '<script>
						alert("Erro ao alterar Modalidade!");
					</script>';
			}	

	


header("Location: ../index.php");


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

