
<?php


session_start(); 

//echo $_SESSION["mecadastrei"];
//echo "<br>";
//echo $_SESSION["id_modalidade"];

echo "<br>";

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	
 } 
 
 
 //if (isset($_GET["nome"]))

?>





<?php




//echo "Olá ". $_SESSION["username"] . " você está ". $_SESSION["status"];



//echo $_SESSION["qtd_vagas_modalidade"];


 
 
 
 //if (isset($_GET["nome"]))

?>

<?php

include '../conexao/conexao.php';
  
//try{
	
	if ($_SESSION["qtd_vagas_modalidade"]>0){	
$stmt = $conexao->prepare("update tbl_modalidade
set qtd_vagas_modalidade=qtd_vagas_modalidade-1 where id_modalidade = ?");


//$qtd = $_COOKIE["qtd"];




$id_modalidade= $_SESSION["id_modalidade"];





$stmt -> bindParam(1,$id_modalidade);

 

$stmt->execute(); 

//header('location: index.php');

  if($stmt->rowCount() >0){
			 echo '<script>
						alert("Cadastro realizado com sucesso!");
						location.href="index.php"
					</script>';
					$novo = "CADASTREI";
$_SESSION["mecadastrei"]=$novo;












					
			}else{
			 echo '<script>
						alert("Erro ao realizar cadastro!");
					</script>';
					 $_SESSION["erro"] = "SEM VAGA";
			}	


 




}





//header('Location: index.php'); 
 
//}


//}catch(PDOException $e){
//echo 'ERROR: ' . $e->getMessage();

//}

?>

