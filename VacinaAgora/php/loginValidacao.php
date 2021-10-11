<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("loginConexao.php");    
    
    //O campo usuário e senha preenchido entra no if para validar
    //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    if((isset($_POST['loginFunc'])) && (isset($_POST['senhaFunc']))){
        $loginFunc = mysqli_real_escape_string($conn, $_POST['loginFunc']); 
        $senhaFunc = mysqli_real_escape_string($conn, $_POST['senhaFunc']);
        $senhaFunc = md5($senhaFunc);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $sql = "SELECT * FROM cadfunc WHERE loginFunc = '$loginFunc' && senhaFunc = '$senhaFunc' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_assoc($result);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            
            $_SESSION['loginFunc'] = $resultado['loginFunc'];
            $_SESSION['senhaFunc'] = $resultado['senhaFunc'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: loginAdm.php");
        
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: loginAtt.php");
        
            }else{
                header("Location: loginVacina.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido1";
            header("Location: loginVacina.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido2";
        header("Location: loginVacina.php");
    }
?>