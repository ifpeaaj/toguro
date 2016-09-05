
<?php
session_start();
echo $_SESSION["mecadastrei"];
echo $_SESSION["id_modalidade"];

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	 
 } 
 
 
 //if (isset($_GET["nome"]))

?>


<?php
 
include '../conexao/conexao.php';
  
try{
	

	
		
	
$stmt = $conexao->prepare("insert into tbl_cadastro
(id_mat,id_modali,data_cadastro) values (?,?,?)"); 




$id_mat=  $_SESSION["id_matricula"]; 
$id_modali= $_SESSION["id_modalidade"];
$data_cadastro= NULL; 


$stmt -> bindParam(1,$id_mat);
$stmt -> bindParam(2,$id_modali);
$stmt -> bindParam(3,$data_cadastro); 


echo $id_modali;


$contagem = $stmt->rowCount();

if ( $contagem == 0  ) {

$stmt->execute();
	
}




//echo "Inserção realizada com sucesso.";


$m= $_SESSION["id_matricula"]; 
$d = $_SESSION["id_modalidade"];

$_SESSION["IDMA"] =  $m;
$_SESSION["IDMO"]= $d;

 

header("Location: updatequantidade.php"); 





}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();

}

?>

