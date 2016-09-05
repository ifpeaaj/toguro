<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
</head>


<?php

include '../../conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_usuario where nome_usuario = ?");


$nome_usuario= $_GET["nome_usuario"];
  

$stmt->bindValue(1,$nome_usuario);


$stmt->execute();

if($stmt->rowCount() >0){
	 echo "Usuario Encontrado com Sucesso";
	}else{
	 echo "Usuario Não Encontrado !";	
	}	




$resultado = $stmt->fetchAll();



foreach($resultado as $linha){



echo '
<fieldset style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; WIDTH: 425px; PADDING-TOP: 10px ;background-color:lightgrey">
    <legend><FONT 
      face=verdana color=red size=4 text-align:center>Dados do Usuario:</legend>

<table style="width:80%" cellspacing="15">

  <tr>
<th>ID Usuário</th>
    <th>Nome</th>
    <th>Rg</th> 
    <th>Cpf</th>
<th>Endereço</th>
    <th>Telefone</th> 
    <th>Email</th>
<th>Data_nascimento</th>
<th>Data_matricula</th>

  </tr>
  <tr>
  
   
  
  
  
	<td><p  align="center">    ' . $linha['id_matricula'] . '</p></td>
    <td><p  align="center">  ' . $linha['nome_usuario'] . '  </p></td>
    <td><p align="center">' . $linha['rg_usuario'] . ' </p></td>
    <td><p align="center"> ' . $linha['cpf_usuario'] . ' </p></td>
    <td><p  align="center"> ' . $linha['endereco_usuario'] .  ' </p></td> 
    <td><p  align="center"> ' . $linha['telefone_usuario'] .  ' </p></td> 
    <td><p  align="center"> ' . $linha['email_usuario'] .  ' </p></td> 
    <td><p  align="center"> ' . $linha['data_nascimento_usuario'] .  ' </p></td> 
     <td><p  align="center"> ' . $linha['data_matricula_usuario'] .  ' </p></td> 
    
    
    <td></td>
 <th></th>
    <td><a href="deleteusuario.php?id_matricula='. $linha['id_matricula'].'"><img src="../img/exclui.png"width="40"> <a></td>
 <th><a href="deleteusuario.php?id_matricula='. $linha['id_matricula'].'">Excluir <a></th>
    <td><a href="alterarusuario.php?id_matricula='. $linha['id_matricula'].'"><img src="../img/alterar.png"width="40"> <a></td>
 <th><a href="alterarusuario.php?id_matricula='. $linha['id_matricula'].'">Alterar <a></th>
 


  </tr>

</table> </fieldset> ';








} 

?>

