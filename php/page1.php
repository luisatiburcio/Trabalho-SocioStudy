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
        <div class="container-2">
            <div class="" style="width:40%; display: flex; margin-top: 5%">
                <h2 class="text-1"><strong>SocioStudy</strong> promove o estudo da sociologia  de maneira divertida, fácil
                    e gratuita.</h2>
            </div>
        </div>

        <div class="container-3">

                <div style="display: flex; flex-direction: column; justify-content: center; margin-left: 5%; ">
                <h2 class="text-white">Como o SocialStudy funciona?</h2>
                <div style="width: 100%; text-align: justify;">
                <h4 class="text-white">O SociaStudy busca trazer através de uma plataforma online e gratuita, o
                    estudo das Ciências Sociais, de modo inclusivo e palpável para jovens do Ensino Médio.</h4>
                </div>
            </div>
            <div style="margin-right: 15%; width: 65%;">
                <img class="img-2" src="./../assets/livrosPage1.png" alt="Livros azuis e amarelos" height="100%" width="180%" >
            </div>
            </div>
        <div class="container-7"></div>

        <footer class="footer py-1 bg-primary mt-5">
        <div class= "container">
      <p style="color: white;">
        Sociostudy © 2022 </p>
    </div>
  </footer>
    </section>

</body>

</html>