<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>

<?php

include '../conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_modalidade where nome_modalidade = ?");


$nome= $_GET["nome_modalidade"];
  

$stmt->bindValue(1,$nome);


$stmt->execute();

if($stmt->rowCount() >0){
	 echo "Modalidade Encontrada com Sucesso";
	}else{
	 echo "Modalidade Não Encontrada !";	
	}	




$resultado = $stmt->fetchAll();



foreach($resultado as $linha){



echo '
<fieldset style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; WIDTH: 425px; PADDING-TOP: 10px ;background-color:lightgrey">
    <legend><FONT 
      face=verdana color=red size=4>Dados da Modalidade:</legend>



<table style="width:80%">

  <tr>
<th>ID</th>
    <th>Nome</th>
    <th>Vagas</th> 
    <th>Turno</th>
<th>Horario</th>


  </tr>
  <tr>
	<td><p  align="center">    ' . $linha['id_modalidade'] . '</p></td>
    <td><p  align="center">  ' . $linha['nome_modalidade'] . '  </p></td>
    <td><p align="center">' . $linha['qtd_vagas_modalidade'] . ' </p></td>
    <td><p align="center"> ' . $linha['turno_modalidade'] . ' </p></td>
    <td><p  align="center"> ' . $linha['horario_modalidade'] .  ' </p></td> 
 
    <td></td>
 <th></th>
    <td><a href="alterarmodalidade.php?id_modalidade='. $linha['id_modalidade'].'"><img src="../img/alterar.png"width="40"> <a></td>
 <th><a href="alterarmodalidade.php?id_modalidade='. $linha['id_modalidade'].'">Alterar <a></th>
 
    <td></td> 
 <th></th>

    <td><a href="deletemodalidade.php?id_modalidade='. $linha['id_modalidade'].'"><img src="../img/exclui.png"width="40"> <a></td>
    <td><a href="deletemodalidade.php?id_modalidade='. $linha['id_modalidade'].'">Excluir <a></td>
 




  </tr>

</table> </fieldset> ';







} 

?>

