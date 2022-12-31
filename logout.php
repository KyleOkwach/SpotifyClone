<?php
    session_start();
    unset($_SESSION['email']);
    header("location: login.php");

    // Logout created
    session_destroy();
?>