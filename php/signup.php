<?php
    session_start();
    include_once "config.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['create']);
    $cpass = mysqli_real_escape_string($conn, $_POST['confirm']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    
    if(!empty($email) && !empty($password) && !empty($cpass) && !empty($username)) {
        if($cpass != $password) {
            echo "The passwords don't match";
        } else {

            if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $sqlemail = mysqli_query($conn, "SELECT * FROM users where email = '{$email}'");
                $sqlusername = mysqli_query($conn, "SELECT * FROM users where username = '{$username}'");
                
                if(mysqli_num_rows($sqlemail) > 0) {
                    echo "This email is already in use!";
                } else if(mysqli_num_rows($sqlusername) > 0) {
                    echo "This username is already taken!";
                } else {
                    // if username and email are not taken
                    if(isset($_FILES['image'])) {
                        $img = $_FILES['image'];
                        $imgName = $_FILES['image']['name'];
                        $imgTmpName = $_FILES['image']['tmp_name'];
                        $imgError = $_FILES['image']['error'];

                        // get image extension
                        $imgExplode = explode('.', $imgName);
                        $imgExt = strtolower(end($imgExplode));  // extension

                        $allowed = ['png', 'jpg', 'jpeg'];

                        if(in_array($imgExt, $allowed)) {
                            if($imgError === 0) {
                                $imgNewName = uniqid('', true) . $imgName . "." . $imgExt;
                                $imgDest = "uploads/profiles/" . $imgNewName;

                                // encrypt password
                                $pass_crpt = password_hash($password, PASSWORD_DEFAULT);
                                $uniqueId = uniqid("");
                                // post data to database

                                $sql = mysqli_query($conn, "INSERT INTO users(unique_id, email, username, password, img)
                                                            values('{$uniqueId}', '{$email}', '{$username}', '{$pass_crpt}', '{$imgNewName}')");

                                $sqlCheck = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sqlCheck) > 0){
                                    move_uploaded_file($imgTmpName, $imgDest);

                                    $row = mysqli_fetch_assoc($sqlCheck);
                                    $_SESSION['session_id'] = $row['unique_id'];
                                    echo "success";
                                }
                            } else {
                                echo "There was an error uploading your image!";
                            }
                        } else {
                            echo "Invalid image file!";
                        }
                    } else {
                        echo "Please select a profile picture";
                    }
                }
            } else {
                echo "$email is an invalid email";
            }
        }
    } else {
        echo "Please fill out all fields";
    }
?>