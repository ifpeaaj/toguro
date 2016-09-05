<?php
echo "<meta charset = 'UTF-8'>"; 
session_start();

$_SESSION["cpf"] = $_POST["cpf"];
$_SESSION["rg"] = $_POST["rg"];

//echo "Olá ";
//echo $_SESSION["cpf"]; 
//echo " você está logado";
//echo $_SESSION["rg"];   


include '../conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_usuario where cpf= ? and rg = ?");


//if (isset($_GET["nome"])){
$cpf= $_POST["cpf"];
$rg= $_POST["rg"];
  

$stmt->bindValue(1, $cpf);
$stmt->bindValue(2, $rg);



$stmt->execute();


$obj = $stmt->fetchObject(); 


if ($obj) {  
$_SESSION['cpf'] = $cpf; 
header('Location: http://outro/lugar'); 
} else { 
echo '<p class="erro">Login/Senha errado</p>'; 
} 















?>


 <button type="submit" name="sair"><a href="sair.php">sair</a></button>
