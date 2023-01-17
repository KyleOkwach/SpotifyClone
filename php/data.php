<?php
    while($row = mysqli_fetch_assoc($query)) {
        // $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
        //         OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
        //         OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        // $query2 = mysqli_query($conn, $sql2);
        // $row2 = mysqli_fetch_assoc($query2);
        // if(mysqli_num_rows($query2) > 0) {
        //     $result = $row2['msg'];
        // }else {
        //     $result = "No recent message";
        // }

        // (strlen($row['title']) > 28) ? $title = substr($result, 0, 28). "..." : $msg = $result;

        $output .= '
            <a href="/song?s='. $row['unique_music_id'] .'" class="song__link">
                <div class="flex song__cont song__cont__main">
                    <input class="songId" type="text" value="'. $row['unique_music_id'] .'" hidden>
                    <div class="flex flex__h cont__display">
                        <div class="cont__image">
                            <img src="php/'. $row['cover'] .'" alt="">
                        </div>
                    </div>
                    <div class="cont__play">
                        <button class="playsong" href="?song='. $row['unique_music_id'] .'">
                            <iconify-icon class="play_i__menu" inline icon="material-symbols:play-arrow" width="25" height="25"></iconify-icon>
                        </button>
                    </div>
                    <div class="cont__text__details">
                        <div class="text__container text__container-large">
                            <div class="cont__text__details-title text__container__scroll">
                                <h4 class="title text__content">'. $row['title'] .'</h>
                            </div>
                        </div>
                        <div class="cont__text__details-artist">
                            <div class="text__container text__container-large">
                                <div class="cont__text__details-title text__container__scroll">
                                    <p class="text__content">
                                        <a class="artist" href="#at">'. $row['artist'] .'</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        ';
    }
?>