<?php
    session_start();   
    unset(

        $_SESSION['nomeFunc'] = $resultado['nomeFunc'];
        $_SESSION['funcaoFunc'] = $resultado['funcaoFunc'];
        $_SESSION['localFunc'] = $resultado['localFunc'];
        $_SESSION['loginFunc'] = $resultado['loginFunc'];
        $_SESSION['senhaFunc'] = $resultado['senhaFunc'];
        $_SESSION['confsenhaFunc'] = $resultado['confsenhaFunc'];
        );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: loginVacina.php");
?>