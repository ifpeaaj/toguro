
<!DOCTYPE html>
<html >
	<head>
		<title>Hórarios</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/geral.css"/>      
	</head>
	<body>
	 <div id="header" class="header">
                <!-- NOSEARCH -->
        <div id="topnav" class="container">
          <a id="link-logo" class="logo" title="Toguro">
            <img src="../logo.png" alt="Academia Toguro" title="Ir para a página inicial"> 
          </a>
                  
         <ul class="topnav-menu">
            <li><a href="../index.html" id="link-inicio" title="inicio">ínicio</a></li>
            <li><a href="../Atividades/Atividades.html" id="link-Atividades" title="Atividades">Atividades</a></li>
            <li><a href="Horarios.php" id="link-Horarios" title="Horarios">Horários</a></li>
            
          </ul>    
        </div>
        <!-- TODO: COMPONENTIZAR menu2 -->
        <div id="toolbar" class="header">
          <div class="container">
            
              <ul id="toolbar-menu">
                <li class="login">                                   
                  <a href="../Login/Login.html" title="Fazer Login">Login</a>
                </li>  
              </ul>
          </div>
        </div> 
         <div>
      <center>
          <table class="horario" border="4">
            <tr height="90px" width="150px">
            <th font-size="30" colspan="5">TABELA DE HORÁRIOS</th>
            </tr>
            <tr height="90px" width="150px">
              <td bgcolor="#000" align='center'><img src="../logo.png" alt=""></td>
              <td><center>Turno</center></td>
              <td><center>Horários</center></td>
            </tr>

           
            <?php
              $conexao = new PDO("mysql:host=localhost;dbname=bd_academia_toguro","root","");
                $stmt = $conexao->query ("select * from tbl_modalidade");
                while ($linha = $stmt -> fetch (PDO::FETCH_ASSOC)){
                echo "<tr height='60px' width='100px'>
                  <td align='center'>".$linha['nome_modalidade']."</td>
                  <td align='center'>".$linha['turno_modalidade']."</td>
                  <td align='center'>".$linha['horario_modalidade']."</td> </tr>";
              }
          ?>

          </table>
          </center>
</div>


      

      <div id="rodape" >
      <center><img src="../logo.png" height="50px" >
      </center>
      </div>  

       </div>

  </body>
</html>
