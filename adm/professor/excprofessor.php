<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<?php

include '../conexao/conexao.php';



echo ' 

  <fieldset>
    <legend>Excluir Professor:</legend>

<table  border=0  WIDTH=100% BGCOLOR=#CCCCCC>

 <tr>
<th WIDTH=5% align="center">Cod_professor</th>
    <th WIDTH=10% >Nome</th>
    <th WIDTH=10%>Rg</th> 
    <th WIDTH=10%>Cpf</th>
<th WIDTH=10%>Endereco</th>
    <th WIDTH=10%>Telefone</th> 
    <th WIDTH=10%>Email</th>
<th WIDTH=10%>Data_nascimento</th>

  </tr>
</table>
  




';








$stmt = $conexao->query("select * from tbl_professor");
while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){

echo '

  <table style="width:100%" BGCOLOR=#999999>
   <tr> 
  
	<th WIDTH=5%><p  align="center">    ' . $linha['cod_professor'] . '</p></th>
    <td WIDTH=10%><p  align="center">  ' . $linha['nome_professor'] . '  </p></td>
    <td WIDTH=10%><p align="center">' . $linha['rg_professor'] . ' </p></td>
    <td WIDTH=10%><p align="center"> ' . $linha['cpf_professor'] . ' </p></td>
    <td WIDTH=10%><p  align="center"> ' . $linha['endereco_professor'] .  ' </p></td> 
    <td WIDTH=10%><p  align="center"> ' . $linha['telefone_professor'] .  ' </p></td> 
    <td WIDTH=10%><p  align="center"> ' . $linha['email_professor'] .  ' </p></td> 
    <td WIDTH=10%><p  align="center"> ' . $linha['data_nascimento_professor'] .  ' </p></td> 
 
  

    <td WIDTH=10% align="center"><a href="deleteprofessor.php?cod_professor='. $linha['cod_professor'].'"><img src="../img/exclui.png"width="40"> <a></td>
 <td WIDTH=10% align="center"><a href="deleteprofessor.php?cod_professor='. $linha['cod_professor'].'">Excluir <a></td>

 


  </tr>
<div style="background-color:#000">. </div>
</fieldset>
</table>  ';









}

?>

