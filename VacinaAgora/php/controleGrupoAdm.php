<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styleVacina.css">
    <script src="../javscript\javascriptVAcina.js"></script>
	<title>Área Restrita: Administrador - Controle de Grupos / Faixa de idade</title>
</head>

<body>
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

		<div class="tituloAgendamento">	Área Restrita: Administrador - </div>
		
		<div class="content">
        
        <div id="conteinerGrupo" class="col-12 col-m-6 col-p-6">

<!-- faixa de idade-->


<div class="idadeBotao">
    <p class="btnTitulo">Publico Geral:</p>
    <input type="checkbox" name="teste" value="opt1" id="checkbox1" onclick="desabilitar1('sim')"><a href="agendaCaduser.php"><input type="button"  class="btnGrupo" id="btn1" value="12 a 14 anos"></a>
    <input type="checkbox" name="teste" value="opt1" id="checkbox2" onclick="desabilitar2('sim')"><a href="agendaCaduser.php"><input type="button"  class="btnGrupo" id="btn2" value="15 a 17 anos"></a>
    <input type="checkbox" name="teste" value="opt1" id="checkbox3" onclick="desabilitar3('sim')"><a href="agendaCaduser.php"><input type="button"  class="btnGrupon" id="btn3" value="18 a 24 anos"></a>
    <input type="checkbox" name="teste" value="opt1" id="checkbox4" onclick="desabilitar4('sim')"><a href="agendaCaduser.php"><input type="button"  class="btnGrupo" id="btn4" value="25 a 59 anos"></a>
    <input type="checkbox" name="teste" value="opt1" id="checkbox5" onclick="desabilitar5('sim')"><a href="agendaCaduser.php"><input type="button"  class="btnGrupo" id="btn5" value="60 anos ou mais"></a>
    <br>
</div>


<hr width="75%">

<!-- comorbidades-->
<div class="idadeBotao">
    <p class="btnTitulo">Pessoas Com Comorbidades, Deficientes, Gestantes ou Puerperas: </p>
    <input type="checkbox" name="teste" value="opt1" id="checkbox6" onclick="desabilitar6('sim')"><a href="php\agendaCaduser.php"></a><input type="button" id="btn6" class="btnGrupo" value="12 a 17 anos"></a>
    <input type="checkbox" name="teste" value="opt1" id="checkbox7" onclick="desabilitar7('sim')"><a href="php\agendaCaduser.php"></a><input type="button" id="btn7" class="btnGrupo" value="18 a 59 anos"></a>
    <br>
    </div>

        <hr width="75%">

    <!-- profissionais-->
    <div class="idadeBotao">
        <p class="btnTitulo">Profissionais:</p>
        <input type="checkbox" name="teste" value="opt1" id="checkbox8" onclick="desabilitar8('sim')"><a href="php\agendaCaduser.php"><input type="button" id="btn8"  class="btnGrupo" value="Da Saude"></a>
        <input type="checkbox" name="teste" value="opt1" id="checkbox9" onclick="desabilitar9('sim')"><a href="php\agendaCaduser.php"><input type="button" id="btn9"  class="btnGrupo" value="Da Educação"></a>
        <input type="checkbox" name="teste" value="opt1" id="checkbox10" onclick="desabilitar10('sim')"><a href="php\agendaCaduser.php"><input type="button" id="btn10"  class="btnGrupo" value="Motoristas e cobradores de onibus"></a>
        <br>
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