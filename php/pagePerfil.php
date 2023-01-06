<?php

if(!isset($_SESSION))
session_start();

if(isset($_COOKIE["useremail"])){
  $_SESSION["logado"] = TRUE;
  $_SESSION["user"] = $_COOKIE["username"];

  header("location:page1.php");
}

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] == FALSE){

  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/styleNavbar.css" type="text/css" />
    <link rel="stylesheet" href="./../css/stylePage1.css" type="text/css" />

    <title>SocioStudy</title>
</head>
<section>
        <nav class="navbar navbar-expand-lg">
                <div class="float-left col-2">
                    <img src="./../assets/logo.svg" class="img-fluid" alt="SocioStudy" height="60%" width="80%">
                </div>
                <div class="col-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="page1.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/pageMateria.html">Matéria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/pageProfessores.html">Professores</a>
                        </li>
                    </ul>
                </div>
                <?php
                if (isset($_SESSION["logado"]) && $_SESSION["logado"] == TRUE) {
                    echo '<div class="col-3">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="pagePerfil.php">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                    </ul>';
                } else {
                    echo '<div class="float-right col-4">
                    <form class="form-inline my-2 my-lg-0">
                        <a class="nav-link" href="login.php">Log-in</a>
                        <a class="btn btn-primary" href="../html/singup.html" role="button">Sign-up</a>
                    </form>
                </div>';
                }
                ?>
        </nav>
    </section>
<body>
    <section>
<div class="container-1" style="display: flex; justify-content: center; flex-direction: row">
    <div class="container" style="justify-content:center; display:flex">
        <div class="row" style=" width: 50%; height: 160%;">
        <img src="./../assets/user.png" class="img-fluid" alt="SocioStudy" height="250px" width="180px">
            <div class="col-12">
                <h1 class="text-center"><?php echo $_SESSION["user"]; ?></h1>
                <p class="text-center">Aluno</p>
                <div id="linha-horizontal" style=" width: 100%; border: 1px solid #000;"></div>
                <div class="col-12" style="margin-top: 5%; display: flex; justify-content: flex-start; width: 190%; flex-direction: column">
                    <h3 class="text-center">Informações</h3>
                    <p class="text-center">Nome: <?php echo $_SESSION["user"]; ?></p>
                    <p class="text-center">E-mail: <?php echo $_SESSION["email"]; ?></p>
                </div>
            </div>
        </div>
    </div>
        <div class="container" style="display:flex; justify-content:center; width:50%; flex-direction: row">
            <div class="row" style="margin-right: auto;width: 60%; height: 160%; display:flex; boder: 30px solid blue;">
                <div class="col-12" style="margin-top: 5%; display: flex; justify-content: flex-start; width: 190%; flex-direction: column">
                    <h3 class="text-center">Matérias Completas</h3>
                    <p class="text-center"><a href="../html/conteudo1.html">Origem da Sociologia: formação do pensamento sociológico</a></p>
                    <p class="text-center"><a href="../html/conteudo2.html">Racismo, desigualdade racial e o movimento negro no Brasil</a></p>
                </div>

    </div>
   </div>
</div>
            </section>
</body>

</html>