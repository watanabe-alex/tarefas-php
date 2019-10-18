<?php

    session_start();

    $_SESSION["contador"] = 0;

    header("Location: ../mostrar.php");

?>