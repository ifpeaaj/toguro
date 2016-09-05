<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="../css/adm.css"/>
		<script type="text/javascript" src="../js/MascaraValidacao.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
	</head>
	<body>

			<div id="header" > 
                <!-- NOSEARCH -->
        <div>
          <a  id="link-logo" class="logo" title="Toguro">
            <img src="../img/logo.png" alt="Academia Toguro"> 
          </a>
      
        <div id="toolbar"></div>  

		<form action="insertprofessor.php" method="POST" class="header" name="form1"> 
    	<div class="margimformadm">

    	<h1 id="title" class="hidden"><span id="logo">Cadastro de Professor</span></h1>
   
   		<center><fieldset style=" width:800px"><table border="0">
			<tr>
				<td>Nome do Professor :</td>
				<td>
					<input type="text" name="nome_professor" required="" autofocus="">
				</td>
			</tr>
			<tr>
				<td>Rg :</td>
				<td>
					<input type="text" name="rg_professor" id="rg" required="" class="form-control rg-mask" placeholder="Ex.: 0000000" maxlength="7">
				</td>
			</tr>
			<tr>
				<td>Cpf :</td>
				<td>
					<input type="text" name="cpf_professor" required="" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" maxlength="14" onKeyPress="MascaraCPF(form1.cpf_professor);">
				</td>
			</tr>
			<tr>
				<td>Endereço :</td>
				<td><input type="text" name="endereco_professor" required=""></td>
			</tr>
			<tr>
				<td>Telefone :</td>
				<td>
					<input type="text" name="telefone_professor" required="" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000" maxlength="14" onKeyPress="MascaraTelefone(form1.telefone_professor);">
				</td>
			</tr>
			<tr>
				<td>E-mail :</td>
				<td><input type="email" name="email_professor" required=""></td>
			</tr>
			<tr>
				<td>Data de Nascimento :</td>
				<td>
					<input type="date" name="data_nascimento_professor" required="" class="form-control" placeholder="Ex.: aaaa/mm/dd" data-mask="0000/00/00" maxlength="10" onKeyPress="MascaraData(form1.data_nascimento_professor);">
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

