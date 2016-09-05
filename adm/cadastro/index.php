

<?php



session_start(); 

 echo $_SESSION["IDMA"];
 echo $_SESSION["tipo"];
	echo  $_SESSION["IDMO"];

//ECHO $_SESSION["mecadastrei"];

//ECHO  $_SESSION["erro"];
		
		$tipo =  $_SESSION["mecadastrei"];
	if ($tipo == 'CADASTREI') {
	 
	// ECHO "AAAAAAAAAAAAAAA";
 
 } 
 	
		
		
		


if ($_SESSION["status"] == '' or $_SESSION["tipo"] == 'F' or $_SESSION["tipo"] == 'A'  ) {
	
	 header('Location: ../index.html'); 
	
 } 
 
 
 //if (isset($_GET["nome"]))

?>



<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../css/adm.css"/>
  </head>
  <body>
	

	
	
	
	<div style="background-color:#000">
		
	   <p align="center"> <h1 align="center"><font size="6" color=#fff> :: PÁGINA DO USUÁRIO ::</font></h1></p>
  </div>
  
  
  	<div style="background-color:#000">
		
	   <p align="center"> <h1 align="center"><font size="3" color=#fff>  Bem vindo, <?php   echo $_SESSION["nome_usuario"]; ?></font></h1></p>



 
  </div>
  
  
  

  
  
  
  <br>
	<div>
      <th><a href="../index.php"><img src="../img/sair.png" width="60"></a></th>
	</div>
	

  <div>
<?php



          include '../conexao/conexao.php';
          $stmt = $conexao->prepare("select * from tbl_modalidade where nome_modalidade like ?");

          //if (isset($_GET["nome_modalidade"])){
          
      
          $_GET["nome_modalidade"]="";
          $nome= $_GET["nome_modalidade"]; 
            

          $stmt->bindValue(1,"%" .$nome ."%");






          $stmt->execute();


          if($stmt->rowCount() >0){

          echo '
          <fieldset color=red background=orange>

          <table style="width:100%" border=0 BGCOLOR=white>

            <tr>
         
              <th WIDTH=10%>Nome</th>
              <th WIDTH=10%>Vagas</th> 
              <th WIDTH=10%>Turno</th>
          <th WIDTH=10%>Horario</th>
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


	
		
		if ($linha['qtd_vagas_modalidade']>0){


          echo '
          <table style="width:100%" border=0 BGCOLOR=white>
            <tr>
        
              <td WIDTH=10%><p  align="center">  ' . $linha['nome_modalidade'] . '  </p></td>
              <td WIDTH=10%><p align="center">' . $linha['qtd_vagas_modalidade'] . ' </p></td>
              <td WIDTH=10%><p align="center"> ' . $linha['turno_modalidade'] . ' </p></td>
              <td WIDTH=10%><p  align="center"> ' . $linha['horario_modalidade'] .  ' </p></td>  
			<th WIDTH=10%>'.  $_SESSION['erro'] .'</th>';
			
			
		
			
			
		
			
			
			 echo '
			
              <td WIDTH=10% align="right" ><a href="select.php?id_modalidade='. $linha['id_modalidade'].'"><img src="../img/certo.png"width="40"> <a></td>
           <td  WIDTH=10% align="center"><a href="select.php?id_modalidade='. $linha['id_modalidade'].'">Cadastrar <a></td>
           ';
           
           


 echo '



            </tr>
           </fieldset> 
          </table>';
      } 
}
  ?>
  	</div>
</body>
</html>



















