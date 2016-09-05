<head><meta charset="utf-8"></head>

<?php

include '../conexao/conexao.php';
  
try{
$stmt = $conexao->prepare("update tbl_professor
set nome_professor=? ,rg_professor=?,cpf_professor=?,endereco_professor=?,telefone_professor=?,email_professor=?,data_nascimento_professor=? where cod_professor = ?");



$nome= $_POST["nome_professor"]; 
$rg= $_POST["rg_professor"]; 
$cpf= $_POST["cpf_professor"]; 
$endereco= $_POST["endereco_professor"]; 

$telefone= $_POST["telefone_professor"]; 
$email= $_POST["email_professor"]; 
$data_nascimento= $_POST["data_nascimento_professor"]; 




$cod_prof= $_GET["cod_professor"]; 




$stmt -> bindParam(1,$nome);
$stmt -> bindParam(2,$rg);
$stmt -> bindParam(3,$cpf);
$stmt -> bindParam(4,$endereco);

$stmt -> bindParam(5,$telefone);
$stmt -> bindParam(6,$email);
$stmt -> bindParam(7,$data_nascimento);




   
$stmt -> bindParam(8,$cod_prof);    


$stmt->execute(); 

  if($stmt->rowCount() >0){
			 echo '<script>
						alert("Professor alterado com sucesso!");
						location.href="../index.php"
					</script>';
			}else{
			 echo '<script>
						alert("Erro ao alterar Professor!");
					</script>';
			}	


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

