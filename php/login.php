<?php

  if(!isset($_SESSION))
  session_start();

  if(isset($_COOKIE["useremail"])){
    $_SESSION["logado"] = TRUE;
    $_SESSION["user"] = $_COOKIE["username"];
    
    header("location:page1.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/styleNavbar.css" type="text/css" />
    <link rel="stylesheet" href="./../css/styleLoginSingup.css" type="text/css" />

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
<body class="text-center">

    <section>
        <div class="container-2">
            <div class="form-1">
                <br><br><br><br>
                <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
                <form method="POST" action="../php/validaLogin.php">
                <label for="Input">Coloque seu email</label>
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
                <label for="Input">Coloque sua senha</label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required="">
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="checkbox" value="remember-me"> Lembrar de mim
                    </label>
                </div>
                <?php
              if(isset($_SESSION["msg_login"])){
            
                echo '<div class="text-center text-danger mt-3">';
                echo '<p>'.$_SESSION["msg_login"].'</p>';
                echo '</div>';
             
                unset($_SESSION["msg_login"]);

              }
              ?>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
            
            </div>
        </div>
    </section>
</body>

</html>




