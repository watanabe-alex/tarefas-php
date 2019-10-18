<?php
    session_start();
    unset($_SESSION);

    //não sei direito pra que isso se durante o exercício não foi setada nenhuma variável em COOKIE
    unset($_COOKIE["email"]);

    header("Location: ../login.php");
?>