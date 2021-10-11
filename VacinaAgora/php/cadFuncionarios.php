<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleVacina.css">
	<title>Area: administrador - Cadastro de funcionarios</title>
</head>

<body>
	<!--  php login session -->
		<!-- header logo titulo-->
	    <header class="header col-12 col-m-12 col-p-12">
        <img id="logo" src="../imagem/vacina_CT2.png">
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
            <div id="tituloCidade">São caetano do Sul</div>
        </div>
    </header>


		<div class="tituloAgendamento">Área Restrita: Administrador</div>
	<div class="tituloInformacoes ">Cadastro de funcionarios</div>
		
		
		<main class="">
			<form class="formAgenda" name="cadastroFunc" action="" method="POST">
				<fieldset>			
					<label for="nome">Nome:</label>
					<input type="text" name="nomeFunc" size="50" maxlength="50" title="Insira o nome corretamente" 	autofocus>		
	   
					<label for="funçao">Função:</label>
					<select name="funcaoFunc" >
							<option value="Astrazeneca">Enfermeira</option>
							<option value="Pfizer">Atendente</option>
							<option value="CoronaVac">Supervisor</option>
					</select>
	   
					<label for="local">Local:</label>
					<select name="localFunc" value="local">
							<option value="localFunc1">Drive Thru Estadio Campanella </option>
							<option value="localFunc2">Drive Thru Garagem Muicipal</option>
							<option value="localFunc3">Drive Thru Teatro Paulo Machado de Carvalho</option>
							<option value="localFunc4">USCA</option>
					</select>	
								
						<label for="login">Login:</label>
						<input type="text" name="loginFunc" size="20" maxlength="20" minlength="3" title="Insira o login 	corretamente">
	   
						<label for="senha">senha:</label>
						<input type="text" name="senhaFunc"size="8" maxlength="8" minlength="8" title="Insira a senha 	corretamente">
	   
						<label for="senhaconfirma">Confirmação de senha:</label>
						<input type="text" name="confsenhaFunc" size="8" maxlength="8" minlength="8" title="Insira 	confirmação a senha corretamente">	

						<label for="">ID login:</label>
						<input type="text" name="niveis_acesso_id" size="8" maxlength="8" title="Insira 	confirmação a senha corretamente">	

						<button type="submit" name="cadastrarFunc" >cadastrar</button> 
						<button type="submit" name="apagarFunc" >apagar</button> 	
						<button type="submit" name="deletarFunc" >deletar</button> 	
				</fieldset>	
			</form>	

		</main> 
			<br><br>
			<!--roda pé-->

			<footer class="">
     			@AVP - 2021 - Escola técnica Alcina Dantas Feijão
     			<a href="loginSair.php " class="loginSair">Sair</a>
 			</footer>
		
</body>
</html>

<?php
if(isset($_POST["cadastrarFunc"])) {
		$conexao = mysqli_connect('localhost','root','','vacinaagora');

		$nomeFunc=$_POST['nomeFunc'];
		$funcaoFunc=$_POST['funcaoFunc'];
		$localFunc=$_POST['localFunc'];
		$loginFunc=$_POST['loginFunc'];
		$senhaFunc=$_POST['senhaFunc'];
		$confsenhaFunc=$_POST['confsenhaFunc'];
		$niveis_acesso_id=$_POST['niveis_acesso_id']; 

		$sql = " INSERT INTO `cadfunc`( `nomeFunc`, `funcaoFunc`, `localFunc`, `loginFunc`, `senhaFunc`, `confsenhaFunc`, `niveis_acesso_id`) 
		VALUES (`$nomeFunc`, `$funcaoFunc`, `$localFunc`, `$loginFunc`, `$senhaFunc`, `$confsenhaFunc`, `$niveis_acesso_id`)";

		$dd=mysqli_query($conexao, $sql);
			if($dd){
				echo "sucesso!";
			}else{
				echo "falha!". mysqli_connect_error();
			}
}
?>