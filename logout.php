<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
unset($_SESSION["name"]);
unset($_SESSION["admin"]);
echo 'You have cleaned session';
header('Refresh: 2; URL = login.php');
?>