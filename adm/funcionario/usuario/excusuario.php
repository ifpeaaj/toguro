
<?php

include '../../conexao/conexao.php';

echo ' 

  <fieldset>
    <legend>Excluir Usuário:</legend>

<table  border=0  WIDTH=100% BGCOLOR=#CCCCCC>

  <tr> 
<th WIDTH=5% align="center"><p  align="center"> ID</p></th>
    <th WIDTH=10%><p  align="center"> Nome do Usuário</p></th>
    <th width= 10%><p  align="center">Rg</p></th> 
    <th width= 10%><p  align="center">Cpf</p></th>
<th width= 10%><p  align="center">Endereco</p></th>
    <th width= 10%><p  align="center">Telefone</p></th> 
    <th width= 10%><p  align="center">Email</p></th>
    
<th width= 10%><p  align="center">Data_nascimento</p></th>
<th width= 10%><p  align="center">Data_matricula</p</th>
<th width= 10%><p  align="center"></p></th>
<th width= 10%><p  align="center"></p></th>

</tr>

  </table>';




$stmt = $conexao->query("select * from tbl_usuario");
while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){

echo '


<table WIDTH=100% BGCOLOR=#999999>
  
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

    <td width= 10% align="center"><a href="deleteusuario.php?id_matricula='. $linha['id_matricula'].'"><img src="../img/exclui.png"width="40"> <a></td>
 <td width= 10% ><a href="deleteusuario.php?id_matricula='. $linha['id_matricula'].'">Excluir <a></td>

 


  </tr>

<div style="background-color:#000">. </div>
 </fieldset>
</table> ';








}

?>

