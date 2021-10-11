<?php
session_start();
if(!empty($_SESSION['loginFunc'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: loginVacina.php");	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleVacina.css">
	<title>Area: Atendimento - Consulta de Vacinação</title>
</head>

<body>
	<!--  php login session -->
	<?php
	   if(isset($_SESSION['msg'])){
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
	   }
   ?>
		<!-- header logo titulo-->

		<header class="header col-12 col-m-12 col-p-12">
        <img id="logo" src="imagem\vacina_CT2.png">
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
            <div id="tituloCidade">São caetano do Sul</div>
        </div>
    </header>


		<div class="tituloAgendamento">
		Área Restrita: Atendimento
		<!-- botao agenda aqui-->
	</div>
	<div class="tituloInformacoes ">Consulta de Vacinação</div>
		
		<div class="content">
			<main>


			<form id="formConsultagenda" name="" method="POST" action="">
				<label for="data">Data:</label>
				<input type="date" focus>
				<label for="local">Local:</label>
				<select name="local">
					<option value="valor1">Drive Thru Estadio Campanella </option>
					<option value="valor2">Drive Thru Garagem Muicipal</option>
					<option value="valor3">Drive Thru Teatro Paulo Machado de Carvalho</option>
					<option value="USCA">USCA</option>
				</select>
				<input type="submit" Value="procurar" name="procurar">
			</form>

TOTAL:<BR>
VACINADOS:<BR>
SOBRAS:<BR>
<hr>

DIA || HORA || NOME || DATANASC || ENDEREÇO  

			</main>
			<br><br>
			<!--roda pé-->

			<footer class="col-12 col-m-12 col-p-12 ">
	@AVP - 2021 - Escola técnica Alcina Dantas Feijão
	<a href="loginSair.php " class="loginSair">Sair</a>
</footer>
		</div>
</body>
</html>


<?php
            //POST Botão nome consultar
           if(isset($_POST["procurar"])){

			//Armazenar campo consult para $consult        
				$data=$_POST["data"];      
            	$local=$_POST["local"];

				// Conectar na pasta vacinaja ou avisar               
               $conexao = mysqli_connect("localhost","root","","vacinaagora")
			   		or die("Não tem banco de dados!");

			   // Selecionar da tabela produto da variavel $consult do campor cosult               
               $sql="SELECT * FROM 'cadvac' WHERE 'data' = '$data'";

			   // Teste da conexão               
               $teste = mysqli_query($conexao,$sql);
               while($linha =mysqli_fetch_array($teste)){     
                   echo "<hr> Dia:".$linha['dia']." || ";
				   echo "Hora: ".$linha['hora']." || ";
				   echo "Nome: ".$linha['nome']." || ";
				   echo "Data de nascimento: ".$linha['datanasc']." || <br><hr>";
                    }
            
	          if(mysqli_query($conexao,$sql)){
				  echo "<br>Consulta com sucesso!";
				}else{
					 echo "Consulta com falha";
				}
           }
?>
