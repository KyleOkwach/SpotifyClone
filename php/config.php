<?php
    session_start();
    $conn = mysqli_connect("127.0.0.1", "root", "", "unify");
    if(!$conn) {
        echo "Database connected".mysqli_connect_error();
    }
?>