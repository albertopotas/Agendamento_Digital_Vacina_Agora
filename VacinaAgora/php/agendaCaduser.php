<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\styleVacina.css">    
    <title> Formulario de Agendamento - Vacina Agora </title>
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


    <div class="tituloAgendamento">Agendamento digital</div>

    <div class="tituloInformacoes ">Cadastro de Agendamento</div>
    
        <form method="POST" action="" class="formAgenda" onsubmit="return checkform(this)">
<Fieldset>
                    <label for="cpf">CPF:</label>
                    <input type="text" value="" name="cpfAgenda" title="Insira seu CPF corretamente: xxx.xxx.xxx-xx" pattern="\d(3).\d(3)\.\d(3)-\(2)" maxlength="15" minlength="10" autofocus required> 
                    
                    <label for="nome">Nome:</label>
                    <input type="text" value="" name="nomeAgenda" title="Insira seu nome completo" >

                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="date" value="" name="datanascAgenda" title="Insira sua data de nascimento " maxlength="10"  minlength="10" required>
                    </Fieldset>
                    
                    <Fieldset>
                    <label for="Endereço:" value="endereco" name="endereco"> Endereço:</label>
                    <input type="text" value="" name="enderecoAgenda" title="Insira seu endereço " maxlength="50"   minlength="5">
                    
                    <label for="Numero:">Numero:</label>
                    <input type="text" value="" name="numeroAgenda" title="Insira seu numero de endereço " maxlength="10"   minlength="1">
                    
                    <label for="Apto:"> Apto:</label>
                    <input type="text" value="" name="aptoAgenda" title="Insira numero seu apartamento " maxlength="10"     minlength="1">
                    
                    <label for="Bairro:">Bairro:</label>
                    <input type="text" value="" name="bairroAgenda" title="Insira o nome do seu bairro " maxlength="20"     minlength="1">
                    
                    <label for="Cidade:">Cidade:</label>
                    <input type="text" value="" name="cidadeAgenda" title="Insira sua cidade " maxlength="20" minlength="1">
                    </Fieldset>
                    
                    <Fieldset>
                    <label for="Data disponivel:">Data disponivel:</label>
                    <input type="date" value="" name="datadispAgenda" title="Insira data para agendamento " maxlength="10"  minlength="10" required>
                    
                    <label for="email">E-mail:</label> 
                    
                    <input type="text" value="" name="emailAgenda" title="Insira seu 
                        e-mail " pattern="(?:[a-z0-9!#$%&'*+/=? ^_`{|}~-]+(?:\.
                        [a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|(?:
                        [\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]| \\
                        [\x01-\x09\x0b\x0c\x0e-\x7f])*" maxlength="50" required >
                    
                        <button type="submit" value="agendar" name="btnagendar">
                        Agendar
                    </button>

                    </Fieldset>

                    
                 
                
            </form>
   
        <script>
            //Criação da função checkForm do form acima
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
   
        
    <footer class="col-12 col-m-12 col-p-12">
        @AVP - 2021 - Escola técnica Alcina Dantas Feijão
    </footer>   
</body>

</html>

<?php
// insert into nao funciona ver com professora
If (isset($_POST['agendar'])){
    
$conexao=mysqli_connect("localhost","root","","vacinaagora");
    
 $cpfAgenda=$_POST['cpfAgenda'];
 $nomeAgenda=$_POST['nomeAgenda'];
 $datanascAgenda=$_POST['datanascAgenda'];
 $emailAgenda=$_POST['emailAgenda'];
 $enderecoAgenda=$_POST['enderecoAgenda'];
 $numeroAgenda=$_POST['numeroAgenda'];
 $aptoAgenda=$_POST['aptoAgenda'];
 $bairroAgenda=$_POST['bairroAgenda'];
 $cidadeAgenda=$_POST['cidadeAgenda'];
 $datadispAgenda=$_POST['datadispAgenda'];
 
$sql= "INSERT INTO 'cadagenda' (`id`, `cpfAgenda`, `nomeAgenda`, `datanascAgenda`, `enderecoAgenda`, `numeroAgenda`, `aptoAgenda`, `bairroAgenda`, `cidadeAgenda`, `datadispAgenda`, `emailAgenda`) VALUES ('','','','','','','','','','','')";   

 $teste=mysqli_query($conexao, $sql);
    if($dd){echo "sucesso!";
    } else{
        echo "falha!". mysqli_connect_error();
    }
}
?>

