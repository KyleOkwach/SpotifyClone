<?php
    session_start();
    include_once "config.php";

    $username = mysqli_real_escape_string($conn, $_POST['cred']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($username) && !empty($password)) {
        // $sql = mysqli_query($conn, "SELECT * FROM users where (email = '{$username}' OR username = '{$username}') AND password = '{$password}'");
        $sql = mysqli_query($conn, "SELECT * FROM users where email = '{$username}' OR username = '{$username}'");
        if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            if(password_verify($password, $row['password'])) {
                $_SESSION['session_id'] = $row['unique_id'];
                echo "success";
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "User not found.";
        }
    } else {
        echo "Please fill out all fields.";
    }
?>