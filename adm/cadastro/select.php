
<?php


session_start(); 

 $_SESSION["id_modalidade"]=$_GET["id_modalidade"];

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	 
 } 
 
 
 //if (isset($_GET["nome"]))

?>

<?php

include '../conexao/conexao.php';
  

$stmt = $conexao->prepare("select * from tbl_modalidade where id_modalidade = ?");
 
 $id_modali= $_GET["id_modalidade"];
 
 $stmt -> bindParam(1,$id_modali);
//if (isset($_GET["nome"])){


$stmt->execute();



$obj = $stmt->fetchAll();

foreach($obj as $linha){
 

 
 $_SESSION["qtd_vagas_modalidade"] = $linha["qtd_vagas_modalidade"];
 
	
//include 'selectcadastro.php';	
	
	
header('Location: selectcadastro.php'); 

//header('Location: updateusuario2.php'); 


} 















?>
