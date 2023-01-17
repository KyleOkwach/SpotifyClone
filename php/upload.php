<?php
    session_start();
    include_once "config.php";

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $album = mysqli_real_escape_string($conn, $_POST['album']);

    if (!empty($title) && !empty($genre) && !empty($album)) {
        if(isset($_FILES['audio'])) {
            $audio = $_FILES['audio'];
            $audio_name = $_FILES['audio']['name'];
            $audio_tmp_name = $_FILES['audio']['tmp_name'];

            $exploded_audio = explode('.', $audio_name);
            $audio_ext = strtolower(end($exploded_audio));
            $valid_audio = ['wav', 'ogg', 'mp3'];

            if(in_array($audio_ext, $valid_audio)) {
                $new_audio = uniqid('', true) . $audio_name . "." . $audio_ext;

                // cover image
                if(isset($_FILES['image'])) {
                    $image = $_FILES['image'];
                    $image_name = $_FILES['image']['name'];
                    $image_tmp_name = $_FILES['image']['tmp_name'];

                    $exploded_image = explode('.', $image_name);
                    $image_ext = strtolower(end($exploded_image));
                    $valid_image = ['png', 'jpg', 'jpeg'];

                    if(in_array($image_ext, $valid_image)) {
                        $new_img = uniqid('', true) . $image_name . "." . $image_ext;

                        // new destinations
                        $audio_dest = 'uploads/music/'.$new_audio;
                        $image_dest = 'uploads/music/covers/'.$new_img;

                        // sql
                        $artist_sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['session_id']}'");
                        $row = mysqli_fetch_assoc($artist_sql);
                        $artist_name = $row['username'];
                        $unique_id = uniqid("");
                        $curr_date = date('Y-m-d');

                        $sql = "INSERT INTO music(unique_music_id, title, file, cover, artist, date_uploaded) values('{$unique_id}', '{$title}', '{$audio_dest}', '{$image_dest}', '{$artist_name}', '{$curr_date}')";
                        $query = mysqli_query($conn, $sql);

                        // uploading files
                        move_uploaded_file($audio_tmp_name, $audio_dest);
                        move_uploaded_file($image_tmp_name, $image_dest);

                        echo "success";
                    } else {
                        echo "Please select a valid audio file - png, jpg, jpeg";
                    }
                }
            } else {
                echo "Please select a valid audio file - wav, mp3, ogg";
            }
        } else {
            echo "Please select an audio file";
        }
    } else {
        echo "Please fill in every detail!";
    }
?>