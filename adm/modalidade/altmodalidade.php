
<html>
<head>
   <meta charset="utf-8">
</head>

<?php

include '../conexao/conexao.php';


echo '

 <fieldset>
    <legend>Alterar Modalidade:</legend>

<table  border=0  WIDTH=100% BGCOLOR=#CCCCCC>

<th WIDTH=5% align="center">ID</th>
    <th WIDTH=10% >Nome da Modalidade</th>
    <th WIDTH=10% >Vagas</th> 
    <th WIDTH=10% >Turno</th>
<th WIDTH=10% >Horario</th>
<th width= 10%><p  align="center"></p></th>
<th width= 10%><p  align="center"></p></th>



';





$stmt = $conexao->query("select * from tbl_modalidade");
while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){


echo '

<table style="width:100%" BGCOLOR=#999999>
  <tr> 


	<th WIDTH=5%><p  align="center">    ' . $linha['id_modalidade'] . '</p></th>
    <td WIDTH=10%><p  align="center">  ' . $linha['nome_modalidade'] . '  </p></td>
    <td WIDTH=10%><p align="center">' . $linha['qtd_vagas_modalidade'] . ' </p></td>
    <td WIDTH=10%><p align="center"> ' . $linha['turno_modalidade'] . ' </p></td>
    <td WIDTH=10%><p  align="center"> ' . $linha['horario_modalidade'] .  ' </p></td> 

    <td WIDTH=10% align="center"><a href="alterarmodalidade.php?id_modalidade='. $linha['id_modalidade'].'"><img src="../img/alterar.png"width="40"> <a></td>
 <th WIDTH=10% align="center"><a href="alterarmodalidade.php?id_modalidade='. $linha['id_modalidade'].'">Alterar <a></th>

 



  </tr>
</fieldset>
</table>  ';


}

?>

