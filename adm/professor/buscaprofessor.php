<head><meta charset="utf-8"></head> 

<?php

include '../conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_professor where nome_professor = ?");


$nome= $_GET["nome_professor"];
  

$stmt->bindValue(1,$nome);


$stmt->execute();

if($stmt->rowCount() >0){
	 echo "Professor Encontrado com Sucesso";
	}else{
	 echo "Professor Não Encontrado !";	
	}	




$resultado = $stmt->fetchAll();



foreach($resultado as $linha){



echo '
<fieldset style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; WIDTH: 425px; PADDING-TOP: 10px ;background-color:lightgrey">
    <legend><FONT 
      face=verdana color=red size=4>Dados do Professor:</legend>

<table style="width:80%" cellspacing="15">

  <tr>
<th>Cod_professor</th>
    <th>Nome</th>
    <th>Rg</th> 
    <th>Cpf</th>
<th>Endereco</th>
    <th>Telefone</th> 
    <th>Email</th>
<th>Data_nascimento</th>

<th></th>
<th></th>
<th></th>
<th></th>
  </tr>
  <tr>
  
   
  
  
  
	<td><p  align="center">    ' . $linha['cod_professor'] . '</p></td>
    <td><p  align="center">  ' . $linha['nome_professor'] . '  </p></td>
    <td><p align="center">' . $linha['rg_professor'] . ' </p></td>
    <td><p align="center"> ' . $linha['cpf_professor'] . ' </p></td>
    <td><p  align="center"> ' . $linha['endereco_professor'] .  ' </p></td> 
    <td><p  align="center"> ' . $linha['telefone_professor'] .  ' </p></td> 
    <td><p  align="center"> ' . $linha['email_professor'] .  ' </p></td> 
    <td><p  align="center"> ' . $linha['data_nascimento_professor'] .  ' </p></td> 
    
    
    
    <td></td>
 <th></th>
 


<a href="#" onclick="javascript: if (confirm("Você realmente deseja excluir esta mensagem?"))location.href="exclui.php"">Excluir</a>

    <td><a href="deleteprofessor.php?cod_professor='. $linha['cod_professor'].'"><img src="../img/exclui.png"width="40"> <a></td>
 <th><a href="deleteprofessor.php?cod_professor='. $linha['cod_professor'].');">Excluir <a></th>
    <td><a href="alterarprofessor.php?cod_professor='. $linha['cod_professor'].'"><img src="../img/alterar.png"width="40"> <a></td>
 <th><a href="alterarprofessor.php?cod_professor='. $linha['cod_professor'].'">Alterar <a></th>
 


  </tr>

</table> </fieldset> ';







} 

?>

