<?php
session_start();

?>


<?php
echo "<meta charset = 'UTF-8'>"; 


//$_SESSION["username"] = $_POST["username"];
//$_SESSION["senha"] = $_POST["senha"];
 
//echo "Olá "; 
//echo $_SESSION["cpf"]; 
//echo " você está logado";user
//echo $_SESSION["rg"];   


include '../adm/conexao/conexao.php';

$cpf= $_POST["cpf_usuario"];
$senha= $_POST["senha_usuario"];
 $Senhau= md5($senha);
$senhaSalva="";

$stmt = $conexao->query("select * from tbl_usuario where cpf_usuario= '$cpf' ");
  

$contagem = $stmt->rowCount();

if ( $contagem == 1  ) {
	$_SESSION['cpf'] = $cpf;
	
	$_SESSION["status"] = 'LOGADO';
$_SESSION["cpf"] = $cpf;
$_SESSION["id_matricula"] = $linha['id_matricula'];
$_SESSION["mecadastrei"] = "NAOCADASTREI";

 $_SESSION["erro"] = "VAGAS DISPONÍVEIS";
 $_SESSION["jafezcadastro"]="";


$_SESSION["IDMA"] =  ""; 
$_SESSION["IDMO"]= "";

$_SESSION["nome"] = $linha["nome_usuario"];
$_SESSION["tipo_usuario"] = $linha['tipo_usuario']; 
	
	
	
	
	
	
	
}


while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$senhaSalva=$linha['senha_usuario'];
$_SESSION["tipo"] = $linha['tipo_usuario'];
$_SESSION["id_matricula"] = $linha['id_matricula'];
	
	$_SESSION["nome_usuario"]=$linha['nome_usuario'];
	
	echo "$senhaSalva" . "<br>";
	echo $_SESSION["tipo"];
	
	 $tipo=$_SESSION["tipo"];
}

if($Senhau==$senhaSalva and $tipo == 'U'){

 header('Location: ../adm/cadastro'); 
		
}


if($Senhau==$senhaSalva and $tipo == 'A'){

 header('Location: ../adm'); 
		
}


if($Senhau==$senhaSalva and $tipo == 'F'){

 header('Location: ../adm/funcionario'); 
		
} else{
	
echo '<script>
						alert("Cpf ou Senha incorreta, tente novamente!");
						location.href="Login.html"
						
						
					</script>';






}
?>




