<?php
session_start();
try{
    $user_certo = "Gui";
    $senha_certa = "123";

    $user_dig = $_POST["user"];
    $senha_dig = $_POST["pass"];
    
    if($user_dig == $user_certo)
    {
        if($senha_dig == $senha_certa)
        {
            $_SESSION["usuario_logado"] = $user_dig;
            header ("location: index.php");
        } else{
            header ("location: login.php?falhou=true");
        }
    } else{
        header ("location: login.php?falhou=true");
    }

}catch(Exception $e){
    echo $e->getMessage();
}
?>