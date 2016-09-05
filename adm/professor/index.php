

<?php

session_start(); 

if ($_SESSION["status"] == '') {
	
	 header('Location: ../index.html'); 
	 
 } 
 
 
 //if (isset($_GET["nome"]))

?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="../css/indexadm.css"/>
      <meta charset="utf-8">
  </head>
  <body>
	
  	<div style="background-color:#000">
  	 <p align="center"> <h1 align="center"><font size="6" color=#fff> :: ADMINISTRAÇÃO DO SITE TOGURO ::</font></h1></p>
  	</div>
	  <div>
      <th><a href="../adm/login/sair.php"><img src="../img/sair.png"width="60" title="Voltar a tela principal!"></a></th>
	  </div>
	
    <div id="footer">
    <p> 
      <tr>
 
        <th width="center"><a href="../usuario/index.php"><img src="../img/usuario.png"width="40" title="Página do usuário!"></a></th>
        <th><a href="../modalidade/index.php"><img src="../img/modalidades.png"width="40" title="Página de modalidade!"></a></th>
        </tr> 
      <tr>
    </p>  
    </div>	
      <table style="width:80%" align="center"  cellspacing="15">
        
        <tr>
           <th width="center"><img src="../img/lupa.png"width="80"></th>
          <th><img src="../img/professor.png"width="80"></th>
        </tr> 
        <tr>
          <td align="center"><?php include 'formulariobuscaprofessor.php';?></td>
          <td align="center"><a href="cadastro_professor.php">Adicionar Novo Professor</a></td>   
        </tr>
      </table>
        
      <?php

        include '../conexao/conexao.php';
        $stmt = $conexao->prepare("select * from tbl_professor where nome_professor like ?");
        if (isset($_GET["nome_professor"])){
        $nome= $_GET["nome_professor"];
        
      $stmt->bindValue(1,"%" .$nome ."%");

      $stmt->execute();

      if($stmt->rowCount() >0){
      		echo ' 

        <fieldset>
        

      <table  border=0 WIDTH=100% >

       <tr>
      <th WIDTH=5% align="center">Cod</th>
          <th WIDTH=10% >Nome</th>
          <th WIDTH=10%>Rg</th> 
          <th WIDTH=10%>Cpf</th>
      <th WIDTH=10%>Endereco</th>
          <th WIDTH=10%>Telefone</th> 
          <th WIDTH=10%>Email</th>
      <th WIDTH=10%>Data_nascimento</th>
      <th width= 5%><p  align="center"></p></th>
      <th width= 5%><p  align="center"></p></th>
      <th width= 5%><p  align="center"></p></th>
      <th width= 5%><p  align="center"></p></th>
        </tr>
      </table>
      
      ';
      	
      	
      	//echo "Professor Encontrado com Sucesso";
      	//}else{
      	// echo "Professor Não Encontrado !";	
      	}	

      $resultado = $stmt->fetchAll();

      foreach($resultado as $linha){

      echo '

        <table WIDTH=100% border=0>
         <tr> 
      	<th WIDTH=5% ><p align="center"  >    ' . $linha['cod_professor'] . '</p></th>
          <td WIDTH=10%  align="center"><p >  ' . $linha['nome_professor'] . '  </p></td>
          <td WIDTH=10% align="center"><p >' . $linha['rg_professor'] . ' </p></td>
          <td WIDTH=10% align="center"><p > ' . $linha['cpf_professor'] . ' </p></td>
          <td WIDTH=10% align="center"><p  > ' . $linha['endereco_professor'] .  ' </p></td> 
          <td WIDTH=10%  align="center"><p > ' . $linha['telefone_professor'] .  ' </p></td> 
          <td WIDTH=10% align="center"><p  > ' . $linha['email_professor'] .  ' </p></td> 
          <td WIDTH=10% align="center"><p  > ' . $linha['data_nascimento_professor'] .  ' </p></td> 
          
       
          <td WIDTH=5% align="center"><a href="deleteprofessor.php?cod_professor='. $linha['cod_professor'].'"><img src="../img/exclui.png"width="40"> <a></td>
       <td  WIDTH=5% align="center"><a href="deleteprofessor.php?cod_professor='. $linha['cod_professor'].'">Excluir <a></td>
       
          <td WIDTH=5% align="center"><a href="alterarprofessor.php?cod_professor='. $linha['cod_professor'].'"><img src="../img/alterar.png"width="40"> <a></td>
       <td WIDTH=5% align="right"><a href="alterarprofessor.php?cod_professor='. $linha['cod_professor'].'">Alterar <a></td>
       
        </tr>
      </fieldset> 
      </table> ';

      } 
      }
      ?>
</body>
</html>
