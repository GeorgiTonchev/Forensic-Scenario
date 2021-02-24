<?php
session_start();

if (!isset($_SESSION['name'])){
    header('Refresh:.0; ../loginform.php');
    echo "Please Log In before Shoping";

}
?>