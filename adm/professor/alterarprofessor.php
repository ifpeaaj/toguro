<html>
	<head>
		<meta charset="utf-8">
	</head>
	<?php
	try{
	include '../conexao/conexao.php';


	$stmt = $conexao->prepare("select * from tbl_professor where cod_professor = ?");


	$id_prof= $_GET["cod_professor"]; 

	 
	$stmt->bindValue(1,$id_prof);
	$stmt->execute();
	$resultado = $stmt->fetchAll();


	foreach($resultado as $linha){

	 echo 
	 ' 
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="../css/adm.css"/>
			<script type="text/javascript" src="../js/MascaraValidacao.js"></script>
			<meta charset="utf-8">
		</head>
	<body>

		<div id="header" > 
	                <!-- NOSEARCH -->
	        <div>
	          <a  id="link-logo" class="logo" title="Toguro">
	            <img src="../img/logo.png" alt="Academia Toguro"> 
	            <meta charset="utf-8">
	          </a>
	        <div id="toolbar"></div>  


		<form action="updateprofessor.php?cod_professor='. $linha['cod_professor'].'" method="POST" class="header" name="form1"> 
	    	<div class="margimformadm">
	    	
	 		<p class="texte" >Alterar Cadastro do Professor</p>
	   
	   		<center><fieldset style=" width:800px"><table border="0">
				<tr>
					<td>Nome do Professor :</td>
					<td>
						<input type="text" name="nome_professor" required="" autofocus=""  value=' . $linha['nome_professor'] . '>
					</td>
				</tr>
				<tr>
					<td>Rg :</td>
					<td>
						<input type="text" name="rg_professor" id="rg" required="" class="form-control rg-mask" placeholder="Ex.: 0000000" maxlength="7" value=' . $linha['rg_professor'] . '>
					</td>
				</tr>
				<tr>
					<td>Cpf :</td>
					<td>
						<input type="text" name="cpf_professor" required="" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" maxlength="14" onKeyPress="MascaraCPF(form1.cpf_professor);" value=' . $linha['cpf_professor'] . '>
					</td>
				</tr>
				<tr>
					<td>Endereço :</td>
					<td>
						<input type="text" name="endereco_professor" required="" value=' . $linha['endereco_professor'] . '>
					</td>
				</tr>
				<tr>
					<td>Telefone :</td>
					<td>
						<input type="text" name="telefone_professor" required="" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000" maxlength="14" onKeyPress="MascaraTelefone(form1.telefone_professor);" value=' . $linha['telefone_professor'] . '>
					</td>
				</tr>
				<tr>
					<td>email :</td>
					<td>
						<input type="email" name="email_professor" required="" value=' . $linha['email_professor'] . '>
					</td>
				</tr>
				<tr>
					<td>Data de Nascimento :</td>
					<td>
						<input type="date" name="data_nascimento_professor" required="" class="form-control" placeholder="Ex.: aaaa/mm/dd" data-mask="0000/00/00" maxlength="10" onKeyPress="MascaraData(form1.data_nascimento_professor);"  value=' . $linha['data_nascimento_professor'] . '>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Enviar"></td>
				</tr>
			</table></fieldset></center>
		</form> 
	</div>
			 <div id="rodape" ></div> 
	</body>
	</html> 
	  ' ;
	 
	 






	} 
	}catch(PDOException $e){
	echo 'ERROR: ' . $e->getMessage();
	} 
	?>



</html> 

