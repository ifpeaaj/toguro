
<html>
	<head><meta charset="utf-8"></head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET"> 

			<style>
				.input{color:#ccc;}
				.input:focus{color:#000;}
			</style>

 			<input type="text" name="nome_modalidade" value="Digite sua pesquisa aqui..."  class="input"    onfocus="this.value=''";/>
			<input type="submit" value="Buscar modalidades">
		</form> 
	</body>
</html>




