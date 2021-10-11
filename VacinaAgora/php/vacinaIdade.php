<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleVacina.css">
    <script src="../javscript\javascriptVAcina.js"></script>
    <title> Informação e agendamento de grupos- Vacina Agora </title>

</head>

<body>

    
<header class="header col-12 col-m-12 col-p-12">
        <img id="logo" src="../imagem/vacina_CT2.png">
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
            <div id="tituloCidade">São caetano do Sul</div>
        </div>
    </header>


    <div class="content">

        <div class="tituloAgendamento">Agendamento digital.
        </div>

        <div class="tituloInformacoes ">Grupos e Faixas de Idade</div>

        <main class="idadeMain">
            <p>Conforme noticiado a faixa de idade ou grupo especifico, sera aberto o preenchimento e agendamento. 
            </p>

            
            <div id="conteinerGrupo" >
                <!-- faixa de idade-->
                <div class="idadeBotao">

                    <p class="btnTitulo">Publico Geral:</p>
                    <a href="agendaCaduser.php"><input type="button" id="btn"class="btnGrupo" value="12 a 14 anos"></a>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="15 a 17 anos"></a>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="18 a 24 anos"></a>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="25 a 59 anos"></a>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="60 anos ou mais"></a>
                    <br>
                </div>
                <hr width="550px">
                <!-- comorbidades-->
                <div class="idadeBotao">
                    <p class="btnTitulo">Pessoas Com Comorbidades, Deficientes, Gestantes ou Puerperas: </p>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="12 a 17 anos"></a>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="18 a 59 anos"></a>
                    <br>
                </div>
                <hr width="550px">
                <div class="idadeBotao">
                    <p class="btnTitulo">Profissionais:</p>
                    <!-- profissionais-->
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="Da Saude"></a>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="Da Educação"></a>
                    <a href="agendaCaduser.php"><input type="button" id="btn" class="btnGrupo" value="Motoristas e cobradores de onibus"></a>

                </div>
            </div>


    </div>

    </main>

    <footer class="col-12 col-m-12 col-p-12">
        @AVP - 2021 - Escola técnica Alcina Dantas Feijão
    </footer>

</body>

</html>