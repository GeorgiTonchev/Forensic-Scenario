<?php


session_start();


if (!isset($_SESSION['log_admin'])){
    header('Refresh:.5; ../adminlogin.php');
    echo "Please, Log in As Administrator";

}

?>