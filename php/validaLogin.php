<?php

include "dados.php";
  
  if(!isset($_SESSION))
  session_start();
  $logado = FALSE;
  
  $email_entrada = isset($_POST["inputEmail"]) ? $_POST["inputEmail"]: "";
  $senha_entrada = isset($_POST["inputPassword"]) ? $_POST["inputPassword"]: "";

foreach($_SESSION['usuarios'] as $user){
  if($email_entrada == $user['email'] && $senha_entrada == $user['senha']){
    
    $_SESSION["user"] = $user['nome'];
    $_SESSION["email"] = $user['email'];
    $_SESSION["logado"] = TRUE;
    $logado = TRUE;

    if(isset($_POST["checkbox"])){

        setcookie("usermail", $email_entrada, time() + 3600);
        setcookie("username", $nome_cadastrado, time() + 3600);
    }
    header("location: page1.php");

  }
}
if($logado == FALSE){
  $_SESSION["msg_login"] = "E-mail ou senha incorretos";
  header("Location:login.php");
}
?>