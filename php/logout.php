<?php

    if(!isset($_SESSION)){
        session_start();

        unset($_SESSION["user"]);
        unset($_SESSION["logado"]);
        unset($_SESSION["msg_login"]);

        session_destroy();

        setcookie("useremail", "", time()-1);
        setcookie("username", "", time()-1);

        header("location:page1.php");
    }
?>