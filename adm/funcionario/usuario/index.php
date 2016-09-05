<!DOCTYPE html>
<html>
<head>
<style type="text/css">

#footer {
position: fixed;

   top: 50px;

   width: 50px;

   z-index: 400;

   right: 0pt;
}
</style> 
</head>
<body>
	
	<div style="background-color:#000">
	<p align="center"> <h1 align="center"><font size="6" color=#fff> :: ADMINISTRACAO DO SITE TOGURO ::</font></h1></p>
	</div>
	
	
		<div>
 <th><a href="../index.php"><img src="../../img/sair.png" width="60" title="Voltar a tela principal!"></a></th>
	
	</div>
	
	

	
	
	
	
	
	
	

<table style="width:80%" align="center"  cellspacing="15">
  
  <tr >

     <th width="center"><img src="../../img/lupa.png"width="80"></th>
      <th><img src="../../img/usuario.png"width="80"></th>

  </tr> 
  <tr>

     <td align="center"><?php include 'formulariobuscausuario.php';?></td>
      <td align="center"><a href="cadastro_usuario.php">Adicionar Novo Usuario</a></td>
  
       
  </tr> 
    
  <tr>

  </tr>

  
  </table>
  

<?php

include '../../conexao/conexao.php';
$stmt = $conexao->prepare("select * from tbl_usuario where nome_usuario like ?");


if (isset($_GET["nome_usuario"])){

$nome= $_GET["nome_usuario"];
  

$stmt->bindValue(1,"%" .$nome ."%");


$stmt->execute();

if($stmt->rowCount() >0){
	

	
	echo ' 

  <fieldset>
  

<table    WIDTH=100% >

  <tr> 
<th width=2% align="center"><p  align="center"> ID</p></th>
    <th width=10%><p  align="center"> Nome do Usuário</p></th>
    <th width= 10%><p  align="center">Rg</p></th> 
    <th width= 10%><p  align="center">Cpf</p></th>
<th width= 10%><p  align="center">Endereco</p></th>
    <th width= 10%><p  align="center">Telefone</p></th> 
    <th width= 10%><p  align="center">Email</p></th>
    
<th width= 10%><p  align="center">Data_nascimento</p></th>
<th width= 10%><p  align="center">Data_matricula</p</th>


<th width= 4%><p  align="center"></p</th>
<th width= 4%><p  align="center"></p</th>
<th width= 4%><p  align="center"></p</th>

<th width= 4%><p  align="center"></p</th>
</tr>

  </table>';
  
	
	}else{
		
		
		

	}	






	$resultado = $stmt->fetchAll();





foreach($resultado as $linha){



echo '

  <table style="width:100%" border=0 >
   <tr> 
  
	<th WIDTH=2%><p  align="center">    ' . $linha['id_matricula'] . '</p></th>
    <td WIDTH=10%><p  align="center">  ' . $linha['nome_usuario'] . '  </p></td>
    <td width= 10%><p align="center">' . $linha['rg_usuario'] . ' </p></td>
    <td width= 10%><p align="center" > ' . $linha['cpf_usuario'] . ' </p></td>
    <td width= 10%><p  align="center"> ' . $linha['endereco_usuario'] .  ' </p></td> 
    <td width= 10%><p  align="center"> ' . $linha['telefone_usuario'] .  ' </p></td> 
    <td width= 10%><p  align="center"> ' . $linha['email_usuario'] .  ' </p></td> 
    <td width= 10%><p  align="center"> ' . $linha['data_nascimento_usuario'] .  ' </p></td> 
     <td width= 10%><p  align="center"> ' . $linha['data_matricula_usuario'] .  ' </p></td>
 


    <td WIDTH=4% align="center"><a href="deleteusuario.php?id_matricula='. $linha['id_matricula'].'"><img src="../../img/exclui.png"width="40"> <a></td>
 <td  WIDTH=4% align="center"><a href="deleteusuario.php?id_matricula='. $linha['id_matricula'].'">Excluir <a></td>
 
    <td WIDTH=4% align="center"><a href="alterarusuario.php?id_matricula='. $linha['id_matricula'].'"><img src="../../img/alterar.png"width="40"> <a></td>
 <td WIDTH=4% align="center"><a href="alterarusuario.php?id_matricula='. $linha['id_matricula'].'">Alterar <a></td>
 


  </tr>

</fieldset>
</table>  ';








} 
}
?>



</body>
</html>
