<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleVacina.css">
	<title>Area Administrador - Painel Informações</title>
</head>

<body>
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

		<div class="tituloAgendamento">Área Restrita: Administrador</div>
		
		<div class="content">
			<div class="divQuadros">
				<div class="quadroCadastro">
					<p>Cadastro:</p>
						<a href="cadFuncionarios.php" title="cadastro de atendentes e enfermeiros" class="linkQuadros">Funcionarios</a></p> 
						<a href="cadVacina.php" title="cadastro de vacinas/ponto de vacinação" class="linkQuadros">Vacinas</a></p>
				</div>
				<div class="quadroCadastro">
					<p>Consulta:</p>
						<a href="consultVacadm.php" title="consulta de quantidade de vacinas e agendados" class="linkQuadros"> Vacinas</a> <!--DATA, LOCAL, QTD VACINAS, VACINADOS, FALTA--></p>
						<a href="agendaConsultadm.php" title="consulta de cadastro de agendados" class="linkQuadros"> Agendados</a> <!--NOME , CPF, DATA, FORMULARIO, EDITAR, FALTA--></p>
						
				</div>

				<div class="quadroCadastro">
					<p>Controles:</p>
						<a href="controlGrupoadm.php" title="consulta de quantidade de vacinas e agendados" class="linkQuadros"> Grupos / Faixa de Idades</a> <!--DATA, LOCAL, QTD VACINAS, VACINADOS, FALTA--></p>
						<a href="agendaConsultadm.php" title="consulta de cadastro de agendados" class="linkQuadros"> Agendados</a> <!--NOME , CPF, DATA, FORMULARIO, EDITAR, FALTA--></p>
						
				</div>
			</div>
			
			<!--roda pé-->

			<footer class="col-12 col-m-12 col-p-12 ">
	@AVP - 2021 - Escola técnica Alcina Dantas Feijão
	<a href="loginSair.php " class="loginSair">Sair</a>
</footer>

		</div>
</body>
</html>