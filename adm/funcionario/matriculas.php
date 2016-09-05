<?php
echo "<meta charset = 'UTF-8'>"; 

include '../../adm/conexao/conexao.php';


$stmt = $conexao->prepare("select * from tbl_cadastro , tbl_usuario , tbl_modalidade");
 
 
//if (isset($_GET["nome"])){
 

$stmt->execute();




ini_set('memory_limit', '1024M');


   echo '
          <fieldset color=red background=orange>

          <table style="width:100%" border=0 BGCOLOR=white>

            <tr>
         
              <th WIDTH=10%>Nome do usuario</th>
              <th WIDTH=10%>Modalidade</th> 
         <th WIDTH=10%>Horario do curso</th> 
      
       
       

          </table> ';



 $resultado = $stmt->fetchAll();

foreach($resultado as $linha){
 
//session_start();

$idmatriculausuario = $linha['id_matricula'];
$iddocad = $linha['id_mat'];


$idmodalidade = $linha['id_modalidade'];
$iddocadM = $linha['id_modali'];
 

if($iddocad==$idmatriculausuario and $idmodalidade ==  $iddocadM ){



echo '<table style="width:100%" border=1 BGCOLOR=white>
            <tr>
        
              <td WIDTH=10%><p  align="center">  ' . $linha['nome_usuario'] . '  </p></td>
              <td WIDTH=10%><p align="center">' . $linha['nome_modalidade'] . ' </p></td>  
              <td WIDTH=10%><p align="center">' . $linha['horario_modalidade'] . ' </p></td>  
              
              
              
              </table>';









}




 //echo $linha['id_mat']." | " ;
 
//  echo $linha['nome_usuario']." | " ;

	//  echo $linha['id_modali']." | ";
	  
	  
	//  echo $linha['data_cadastro']."<br>";

//header('Location: updateusuario.php'); 

//header('Location: updateusuario2.php'); 


} 















?>


