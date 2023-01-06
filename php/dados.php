<?php

session_start();
$_SESSION['usuarios']=array();

$email_cadastrado = "jonatamcordeiro@gmail.com";
$senha_cadastrada = "123";
$nome_cadastrado = "Jonatam Cordeiro";

array_push($_SESSION['usuarios'], array('email' => $email_cadastrado, 'senha' => $senha_cadastrada, 'nome' => $nome_cadastrado));

$email_cadastrado = "teste@gmail.com";
$senha_cadastrada = "123";
$nome_cadastrado = "Teste";

array_push($_SESSION['usuarios'], array('email' => $email_cadastrado, 'senha' => $senha_cadastrada, 'nome' => $nome_cadastrado));

$email_cadastrado = "analaura@gmail.com";
$senha_cadastrada = "456";
$nome_cadastrado = "Ana Laura";

array_push($_SESSION['usuarios'], array('email' => $email_cadastrado, 'senha' => $senha_cadastrada, 'nome' => $nome_cadastrado));

$email_cadastrado = "igorrichard13@gmail.com";
$senha_cadastrada = "madoka";
$nome_cadastrado = "Igor Richard";

array_push($_SESSION['usuarios'], array('email' => $email_cadastrado, 'senha' => $senha_cadastrada, 'nome' => $nome_cadastrado));

$email_cadastrado = "samuka@gmail.com";
$senha_cadastrada = "eusoulindo";
$nome_cadastrado = "Samuel Henrique";

array_push($_SESSION['usuarios'], array('email' => $email_cadastrado, 'senha' => $senha_cadastrada, 'nome' => $nome_cadastrado));

$email_cadastrado = "peixoto@gmail.com";
$senha_cadastrada = "pipipi";
$nome_cadastrado = "João Victor Peixoto";

array_push($_SESSION['usuarios'], array('email' => $email_cadastrado, 'senha' => $senha_cadastrada, 'nome' => $nome_cadastrado));
?>