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
    <link rel="stylesheet" href="..\css\styleVacina.css">    
    <title> Formulario de Agendamento - Vacina Agora </title>
    <script type="text/javascript" href="javscript\javascriptVAcina.js">

</head>

<body> 
<header class="header col-12 col-m-12 col-p-12">
        <img id="logo" src="imagem\vacina_CT2.png">
        <div id="espacoHeader"></div>
        <div id="tituloHeader">
            <div id="tituloCampanha ">Campanha</div>
            <div id="tituloVacina"> Vacina Agora</div>
            <div id="tituloCidade">São caetano do Sul</div>
        </div>
    </header>


<main class="">
    
    <div class="tituloAgendamento">Agendamento digital.</div>
    <div class="tituloInformacoes ">Consulta de Agendamento</div>

    <p >Verifique todas as informações e confirme presença.</p>
    
    <form name="formAgendapesqueisa" method="POST" action="" onsubmit="return checkform(this)" class="formAgenda">
        <fieldset class="">
                    <label for="nome">CPF:</label>
                    <input type="text" value="" name="cpf" title="Insira seu CPF corretamente: xxx.xxx.
xxx-xx"pattern="\d   (3).   \d(3)\.\d(3)-\(2)" maxlength="15" minlength="10" autofocus required> 
                    <br><br> 

                    <label for="nome">Nome:</label>
                    <input type="text" value="" name="nome" title="Insira seu nome completo" pattern="([A-Z À-Ú]{1,5})
( [a-z à-ú]{3,})" maxlength="50" minlength="5" required>
                    <br><br>

                    <label for="dataNascimento">Data de Nascimento:</label>
                     <input type="date" value="" name="datanasc" title="Insira sua data de nascimento " 
maxlength="10"  minlength="10" required>
                     <br><br>

                     <label for="email">E-mail:</label> 
                     <input type="text" value="" name="email" title="Insira seu e-mail " pattern="(?:[a-z0-9!#$%&'*+/
=? ^_`{|}~-]+(?:\.[a-z 0-9 !#$%&'*+/=?^_`{|}~-]+)*|(?:
[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]| \\[\x01-\x09\x0b\x0c\x0e-\x7f])*" 
maxlength="50" required ><br><br>

                     <label for="Endereço:" value="endereco" name="endereco"> Endereço:</label>
                      <input type="text" value="" name="endereco" title="Insira seu endereço " maxlength="50"   
minlength="5">
                     <br><br> 

                     <label for="Numero:">Numero:</label>
                      <input type="text" value="" name="numero" title="Insira seu numero de endereço " 
maxlength="10"   minlength="1">
                     <br><br>

                     <label for="Apto:">Apto:</label>
                      <input type="text" value="" name="apto" title="Insira numero seu apartamento " 
maxlength="10"     minlength="1">
                     <br><br> 

                     <label for="Bairro:">Bairro:</label>
                      <input type="text" value="" name="bairro" title="Insira o nome do seu bairro " 
maxlength="20"     minlength="1">
                     <br><br> 

                     <label for="Cidade:">Cidade:</label>
                      <input type="text" value="" name="cidade" title="Insira sua cidade " maxlength="20" 
minlength="1">
                     <br><br>

                     <label for="Data disponivel:">Data disponivel:</label>
                      <input type="date" value="" name="datadisp" title="Insira data para agendamento " 
maxlength="10"  minlength="10" required>
                     <br><br>                 
                     <!-- Botão pesquisar e confirmar-->
                    <input type="submit" value="pesquisar" name="pesquisar">
                    <input type="submit" value="Confirmar presença" name="confirma">
                    </fieldset>    
            </form>
            
    </main>
        <script>
            Criação da função checkForm do form acima
        function checkform(form) {
                //Script para Validação de Data de nascimento
                var strData = form.dataNasc.value.replace(/[^0-9]/g, "/");
                var partesData = strData.split("/");
                var data = new Date(partesData[0], partesData[1], partesData[2]);
                if (data > new Date()) {
                    alert("Data de nascimento invalida!");
                    form.dataNascimento.focus();
                    return false;
                }
                return true;
            }
        </script>
    </main>
    <footer class="col-12 col-m-12 col-p-12 ">
     @AVP - 2021 - Escola técnica Alcina Dantas Feijão
     <a href="loginSair.php " class="loginSair">Sair</a>
 </footer>
</body>

</html>

<?php
// insert into nao funciona ver com professora
If (isset($_POST['pesquisar'])){
    
$conexao=mysqli_connect("localhost","root","","vacinaagora") ;
 
// campos formulario   
 $cpf=$_POST['cpf'];
 $nome=$_POST['nome'];
 $datanasc=$_POST['datanasc'];
 $email=$_POST['email'];
 $endereco=$_POST['endereco'];
 $numero=$_POST['numero'];
 $apto=$_POST['apto'];
 $bairro=$_POST['bairro'];
 $cidade=$_POST['cidade'];
 $datadisp=$_POST['datadisp'];
 
 //quero selecionar tudo para os campos pesquisando nome ou cpf (atendente e administrador)
 $sql="SELECT * from `cadVac` (`cpf`, `nome`, `datanasc`, `email`, `endereco`, `numero`, `apto`, `bairro`, `cidade`, `datadisp`) 
 VALUES (`$cpf`, `$nome`, `$datanasc`, `$email`, `$endereco`, `$numero`, `$apto`, `$bairro`, `$cidade`, `$datadisp`)";
   
	$teste=mysqli_query($conexao, $sql);
    if($dd){echo "sucesso!";} else{echo "falha!". mysqli_connect_error();}
}

?>