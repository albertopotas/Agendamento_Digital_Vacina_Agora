<?php 
session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/styleVacina.css">
            <title>Login de Acesso</title>

        </head>

    <body>

            <!-- header logo titulo-->
            <header class="header">
                <img id="logo"  src="../imagem/vacina_CT2.png">

                <div id="tituloHeader">
                    <div id="tituloCampanha ">Campanha</div>
                    <div id="tituloVacina"> Vacina Agora</div>
                    <div id="tituloCidade">São caetano do Sul</div>
                </div>
            </header>
           
            <div class="tituloAgendamento">Login de Acesso</div>
            <div class="divQuadros">

                    <!-- formulario login senha-->
                    <form method="POST" name="formloginFunc" action="loginValidacao.php" class="itemQuadro">
                        <br>
                        <label>Login: </label>
                        <input type="text" name="loginFunc" id="loginFunc">
                        <br><br>
                        
                        <label>Senha: </label>
                        <input type="text" name="senhaFunc" id="senhaFunc">
                        <br><br>

                        <button type="submit" value="Entrar" name="entraFunc">Entrar</button>
                    </form>

                    <p>
            <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
</div>
                <br>
                <br>

                <!--roda pé-->
                <footer class="col-12 col-m-12 col-p-12 ">
                    @AVP - 2021 - Escola técnica Alcina Dantas Feijão 
                </footer>
            </div>
            
                    </body>
    
    
</html>

