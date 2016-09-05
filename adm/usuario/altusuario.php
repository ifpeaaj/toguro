 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
 </head>
 
<?php

include '../conexao/conexao.php';

echo ' 

  <fieldset>
    <legend>Alterar Dados do Usuário:</legend>

<table  border=0  WIDTH=100% BGCOLOR="#777777">

  <tr> 
<td WIDTH=5% align="center"><p  align="center"> ID</p></td>
    <td WIDTH=10%><p  align="center"> Nome do Usuário</p></td>
    <td width= 10%><p  align="center">Rg</p></td> 
    <td width= 10%><p  align="center">Cpf</p></td>
<td width= 10%><p  align="center">Endereco</p></td>
    <td width= 10%><p  align="center">Telefone</p></td> 
    <td width= 10%><p  align="center">Email</p></td>
    
<td width= 10%><p  align="center">Data_nascimento</p></td>
<td width= 10%><p  align="center">Data_matricula</p</td>
<td width= 10%><p  align="center"></p></td>
<td width= 10%><p  align="center"></p></td>

</tr>

  </table>';

$stmt = $conexao->query("select * from tbl_usuario");
while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){

echo ' 

<table border=0 WIDTH=100% BGCOLOR=SILVER>
  <tr>
	<th WIDTH=5%><p  align="center">    ' . $linha['id_matricula'] . '</p></th>
    <td WIDTH=10%><p  align="center">  ' . $linha['nome_usuario'] . '  </p></td>
    <td width= 10%><p align="center">' . $linha['rg_usuario'] . ' </p></td>
    <td width= 10%><p align="center" > ' . $linha['cpf_usuario'] . ' </p></td>
    <td width= 10%><p  align="center"> ' . $linha['endereco_usuario'] .  ' </p></td> 
    <td width= 10%><p  align="center"> ' . $linha['telefone_usuario'] .  ' </p></td> 
    <td width= 10%><p  align="center"> ' . $linha['email_usuario'] .  ' </p></td> 
    <td width= 10%><p  align="center"> ' . $linha['data_nascimento_usuario'] .  ' </p></td> 
     <td width= 10%><p  align="center"> ' . $linha['data_matricula_usuario'] .  ' </p></td> 
	 
	 
	 
	 
	 
	 
    

    <td width= 10% align="center"><a href="alterarusuario.php?id_matricula='. $linha['id_matricula'].'"><img src="../img/alterar.png"width="40" > <a></td>
 <td width= 5% align="center"><a href="alterarusuario.php?id_matricula='. $linha['id_matricula'].'">Alterar <a></td>
 


 

 
  </tr>
<div style="background-color:#000">. </div>
 </fieldset>
</table>  


';


}

?>

