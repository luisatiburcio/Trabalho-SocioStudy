<?php

session_start();

$email = isset($_POST["inputEmail"]) ? $_POST["inputEmail"]: "";
$senha = isset($_POST["inputPassword"]) ? $_POST["inputPassword"]: "";
$nome = isset($_POST["inputNome"]) ? $_POST["inputNome"]: "";


if(!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = array();
}

array_push($_SESSION['usuarios'], array('email' => $email, 'senha' => $senha, 'nome' => $nome));

$_SESSION["user"] = $nome;
$_SESSION["email"] = $email;
$_SESSION["logado"] = TRUE;

header("location: page1.php");

?>