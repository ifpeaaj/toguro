

<?php

session_start(); 

if ($_SESSION["status"] == '' or $_SESSION["tipo"] == 'F' or $_SESSION["tipo"] == 'U'  ) {
	
	 header('Location: ../index.html'); 
	 
 } 
 
 
 //if (isset($_GET["nome"]))

?>



<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../css/indexadm.css"/>
  </head>
  <body>
	
	<div style="background-color:#000">
		
	   <p align="center"> <h1 align="center"><font size="6" color=#fff> :: ADMINISTRAÇÃO DO SITE TOGURO ::</font></h1></p>
  </div>
	<div>
      <th><a href="../index.php"><img src="../img/sair.png" width="60"></a></th>
	</div>
  <div id="footer" >
  <p> 
      <tr>
        <th width="center"><a href="../professor/index.php"><img src="../img/professor.png" width="40" title="Página do professor!"></a></th>
        <th><a href="../usuario/index.php"><img src="../img/usuario.png" width="40" title="Página do usuário!"></a></th>
        </tr> 
      <tr>
  </p>
  </div>	
  <table style="width:80%" align="center"  cellspacing="15">
  
    <tr >

      <th width="center"><img src="../img/lupa.png"width="80"></th>
      <th><img src="../img/modalidades.png"width="80"></th>     
    </tr> 
    <tr>
      <td align="center"><?php include 'formulariobuscamodalidade.php';?></td>
      <td align="center"><a href="cadastro_modalidade.php">Adicionar nova modalidade</a></td>    
    </tr> 
  </table>
  
<?php



          include '../conexao/conexao.php';
          $stmt = $conexao->prepare("select * from tbl_modalidade where nome_modalidade like ?");

          if (isset($_GET["nome_modalidade"])){
          $nome= $_GET["nome_modalidade"]; 
            

          $stmt->bindValue(1,"%" .$nome ."%");


          $stmt->execute();


          if($stmt->rowCount() >0){

          echo '
          <fieldset>

          <table style="width:100%" border=0>

            <tr>
          <th WIDTH=5%>ID</th>
              <th WIDTH=10%>Nome</th>
              <th WIDTH=10%>Vagas</th> 
              <th WIDTH=10%>Turno</th>
          <th WIDTH=10%>Horario</th>
          <th WIDTH=10%></th>
          <th WIDTH=10%></th>
          <th WIDTH=10%></th>
          <th WIDTH=10%></th>


          </table>
            </tr>';

          	// echo "Modalidade Encontrada com Sucesso";
          //	}else{
          	// echo "Modalidade Não Encontrada !";	
          	}	




          $resultado = $stmt->fetchAll();



          foreach($resultado as $linha){


          echo '
          <table style="width:100%" border=0>
            <tr>
          	<td WIDTH=5%><p  align="center">    ' . $linha['id_modalidade'] . '</p></td>
              <td WIDTH=10%><p  align="center">  ' . $linha['nome_modalidade'] . '  </p></td>
              <td WIDTH=10%><p align="center">' . $linha['qtd_vagas_modalidade'] . ' </p></td>
              <td WIDTH=10%><p align="center"> ' . $linha['turno_modalidade'] . ' </p></td>
              <td WIDTH=10%><p  align="center"> ' . $linha['horario_modalidade'] .  ' </p></td> 
           


           
           
           


              <td WIDTH=10% align="right"><a href="deletemodalidade.php?id_modalidade='. $linha['id_modalidade'].'"><img src="../img/exclui.png"width="40"> <a></td>
           <td  WIDTH=10% align="center"><a href="deletemodalidade.php?id_modalidade='. $linha['id_modalidade'].'">Excluir <a></td>
           
              <td WIDTH=10% align="right"><a href="alterarmodalidade.php?id_modalidade='. $linha['id_modalidade'].'"><img src="../img/alterar.png"width="40"> <a></td>
           <td WIDTH=10% align="center"><a href="alterarmodalidade.php?id_modalidade='. $linha['id_modalidade'].'">Alterar <a></td>
           






            </tr>
           </fieldset> 
          </table>';
      } 
    }
  ?>
</body>
</html>



