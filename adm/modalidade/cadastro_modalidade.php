<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/adm.css"/>
		<meta charset="utf-8">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	</head>
	<body>


		<div id="header" > 
                <!-- NOSEARCH -->
        <div>
          <a  id="link-logo" class="logo" title="Toguro">
            <img src="../img/logo.png" alt="Academia Toguro"> 
          </a>
      
        <div id="toolbar"></div>  


		<form action="insertmodalidade.php" method="POST" class="header"> 
		<div class="margimformadm">

		<h1 id="title" class="hidden"><span id="logo">Cadastro de Modalidade</span></h1>

		<center><fieldset style=" width:800px">
		<table border="0">
			<tr>
				<td>Nome da Modalidade :</td>
					<td><input type="text" name="nome_modalidade" required="" autofocus="">
				</td>
			</tr>
			<tr>
				<td>Quantidade de Vagas :</td>
				<td>
					<input type="text" name="qtd_vagas_modalidade" required="" maxlength="2">
				</td>
			</tr>
			<tr>
				<td>Turno :</td>
				<td>
					<select name="turno_modalidade" required="">
						<option></option>
						<option value="Manhã"> Manhã	</option>
						<option value="Tarde"> Tarde	</option>
						<option value="Noite"> Noite	</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Horário :</td>
				<td>
					<input type="time" name="horario_modalidade" required="">
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
