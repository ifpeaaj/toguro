
<?php

session_start(); 

echo "modalida".$_SESSION["id_matricula"]; 

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	  
 } 
 
  
 //if (isset($_GET["nome"]))

?>

<?php

include '../conexao/conexao.php';
  

$stmt = $conexao->prepare("select * from tbl_cadastro where id_mat = ?");
 
 $id_mat= $_SESSION["id_matricula"]; 
 
 $stmt -> bindParam(1,$id_mat);

//echo "$id_mat";
$stmt->execute();






$resultado = $stmt->fetchAll();

$matricula = $_SESSION["id_matricula"]; 




foreach($resultado as $linhas){
 

 $mat = $linhas["id_mat"];	

 if ($mat = $matricula){	
	 
	
		 //$_SESSION["jafezcadastro"]="Cadastro já realizado";
	 	//header("Location: index.php");
	echo "aaaaaaaaaa";
	 
	}else{
		 echo "bbbbbbbbb";
	//header("Location: insertcadastro.php"); 
	//include 'insertcadastro.php';	
			//include 'updatequantidade.php';	
	} 
	 



	
//include 'updatequantidade.php';	
	
	
//header('Location: updatequantidade.php'); 

//header('Location: updateusuario2.php'); 


} 



?>
