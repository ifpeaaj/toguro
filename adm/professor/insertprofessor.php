<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>


<?php
  
include '../conexao/conexao.php'; 


  
try{
$stmt = $conexao->prepare("insert into tbl_professor
(nome_professor,rg_professor,cpf_professor,endereco_professor,telefone_professor,email_professor,data_nascimento_professor) values (?,?,?,?,?,?,?)");

$nome= $_POST["nome_professor"]; 
$rg= $_POST["rg_professor"]; 
$cpf= $_POST["cpf_professor"]; 
$endereco= $_POST["endereco_professor"];  
$telefone= $_POST["telefone_professor"];  
$email= $_POST["email_professor"];  
$data_nascimento= $_POST["data_nascimento_professor"];  


$stmt -> bindParam(1,$nome);
$stmt -> bindParam(2,$rg);
$stmt -> bindParam(3,$cpf);
$stmt -> bindParam(4,$endereco);   
$stmt -> bindParam(5,$telefone);   
$stmt -> bindParam(6,$email);   
$stmt -> bindParam(7,$data_nascimento);   
  
$stmt->execute(); 

  if($stmt->rowCount() >0){
			 echo '<script>
						alert("Professor cadastrado com sucesso!");
						location.href="../index.php"
					</script>';
			}else{
			 echo '<script>
						alert("Erro ao cadastrar Professor!");
					</script>';
			}	

}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

