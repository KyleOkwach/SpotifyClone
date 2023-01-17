<?php
    include_once "config.php";

    $sql = "SELECT * FROM music";
    $query = mysqli_query($conn, $sql);
    $output = "";
    
    $row_count = mysqli_num_rows($query);
    if($row_count < 1) {
        $output .= "No music found";
    } else {
        include "data.php";
    }

    echo $output;
?>