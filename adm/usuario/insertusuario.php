
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>


<?php

include '../conexao/conexao.php';

try{
$stmt = $conexao->prepare("insert into tbl_usuario
(nome_usuario,rg_usuario,cpf_usuario,endereco_usuario,telefone_usuario,email_usuario,data_nascimento_usuario,data_matricula_usuario,tipo_usuario,senha_usuario) values (?,?,?,?,?,?,?,?,?,?)");

$nome= $_POST["nome_usuario"]; 
$rg= $_POST["rg_usuario"]; 
$cpf= $_POST["cpf_usuario"]; 
$endereco= $_POST["endereco_usuario"];  
$telefone= $_POST["telefone_usuario"];  
$email= $_POST["email_usuario"];  
$data_nascimento= $_POST["data_nascimento_usuario"];  
$data_matricula= NULL;  
$tipo_usuario= $_POST["tipo_usuario"]; 
$senha_usuario= md5($_POST["senha_usuario"]); 




$stmt -> bindParam(1,$nome);
$stmt -> bindParam(2,$rg);
$stmt -> bindParam(3,$cpf);
$stmt -> bindParam(4,$endereco);   
$stmt -> bindParam(5,$telefone);   
$stmt -> bindParam(6,$email);   
$stmt -> bindParam(7,$data_nascimento);   
$stmt -> bindParam(8,$data_matricula);   
$stmt -> bindParam(9,$tipo_usuario);   
$stmt -> bindParam(10,$senha_usuario);  
  
  
$stmt->execute(); 

  if($stmt->rowCount() >0){
			 echo '<script>
						alert("Usuário cadastrado com sucesso!");
						location.href="../index.php"
					</script>';
			}else{
			 echo '<script>
						alert("Erro ao cadastrar usuário!");
					</script>';
			}	


}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

