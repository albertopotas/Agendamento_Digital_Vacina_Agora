<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleVacina.css">
	<title>Area: Administrador - Cadastro de vacinas</title>
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


		<div class="tituloAgendamento">	Área Restrita: Administrador</div>
		<div class="tituloInformacoes ">Cadastro de Vacinas</div>
		
		<main class="">
			
			<form class="formAgenda" name="formAgenda" method="POST" action="">
				<fieldset>
					<label for="total" name="total">Total:</label>
					<input type="text" name="totalVac"  size="10"  title="Insira corretamente" autofocus>

					<label for="data" name="data">Data:</label>
					<input type="date" name="dataVac" size="50">

					<label for="fabricante" name="fabricante">Fabricante:</label>
					<select name="fabricanteVac" >
						<option value="Vacina1">Astrazeneca</option>
						<option value="Vacina2">Pfizer</option>
						<option value="Vacina3">CoronaVac</option>
						<option value="Vacina4">Sputink</option>
						<option value="Vacina5">Covaxin</option>
						<option value="Vacina6">Johnson & Johnson</option>
					</select>

					<label for="local" name="local">Local:</label>
					<select name="localVac" >
						<option value="local1">Drive Thru Estadio Campanella </option>
						<option value="local2">Drive Thru Garagem Muicipal</option>
						<option value="local3">Drive Thru Teatro Paulo Machado de Carvalho</option>
						<option value="local4">USCA</option>
					</select>

					<label for="quantidade">Qtde:</label>
					<input type="text" name="qtdeVac" size="10">

					<button type="submit"name="cadastrar">Cadastrar</button>
					<button type="submit"name="apagar">Apagar</button> 
					<button type="submit"name="deletar">Deletar</button>
				</fieldset>
			</form>
		</main>
			<br><br>
			<!--roda pé-->

				<footer class="col-12 col-m-12 col-p-12 ">
					@AVP - 2021 - Escola técnica Alcina Dantas Feijão
					<a href="loginSair.php " class="loginSair">Sair</a>
				</footer>
	</main>
</body>
</html>

<?php
// insert into nao funciona ver com professora
If (isset($_POST['cadastrar'])){
    
$conexao=mysqli_connect("localhost","root","","vacinaagora") ;
    
 
 $totalVac=$_POST['totalVac'];
 $dataVac=$_POST['dataVac'];
 $fabricanteVac=$_POST['fabricanteVac'];
 $localVac=$_POST['localVac'];
 $qtdeVac=$_POST['qtdeVac'];
	
 
 	//INSERT INTO `cadvac`(`id`, `totalVac`, `dataVac`, `fabricanteVac`, `localVac`, `qtdeVac`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
    $sql="INSERT INTO 'cadvac' ( `totalVac`, `dataVac`, `fabricanteVac`,'localVac','qtdeVac') 
	VALUES ('$totalVac', '$dataVac', '$fabricanteVac','$localVac','$qtdeVac')";

	$dd=mysqli_query($conexao, $sql);
if($dd){
	echo "sucesso!";
}else{
	echo "falha!". mysqli_connect_error();
}
}
?>