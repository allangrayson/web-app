<?php
session_start();
if (isset($_SESSION['email'])) {
    $user = $_SESSION['email'];
    date_default_timezone_set("Africa/Dar_es_Salaam");
} else {
    header("Location: login.php");
}
?>