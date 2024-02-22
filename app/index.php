<?php
session_start();
if(!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");

if(isset($_GET["sair"])){
    unset($_SESSION["usuario_logado"]);
    header("location: login.php");
}

?>
<h1>Bem vindo!</h1>
<a href="index.php?sair=true">sair</a>