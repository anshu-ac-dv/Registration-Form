<?php

    session_start();
    $_SESSION['Email']=="";
    unset($_SESSION['Email']);
    session_destroy();

    header ('location:Login.php');

?>