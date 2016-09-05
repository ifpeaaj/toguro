
<?php

session_start(); 


//echo "matricula".$_SESSION["id_matricula"]; 

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	  
 } 
 
  
 //if (isset($_GET["nome"]))

?>

<?php

include '../conexao/conexao.php';
  
$id = $_SESSION["id_matricula"];


$stmt = $conexao->query("select * from tbl_cadastro  ");

$contagem = $stmt->rowCount();


while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	
	$iddobanco=$linha['id_mat'];
	

	
	if($iddobanco==$id){

echo '<script>
						alert("Cadastro já realizado!");
						location.href="index.php"
					</script>';
}
// header('Location: ../adm/cadastro'); 
		
	if($iddobanco!=$id){
echo '<script>
						alert("Cadastro já realizado!");
						location.href="index.php"
					</script>';

	
header("Location: insertcadastro.php")	;	
}
	
	
	
}
	
	


?>
