<?php
    session_start();
    include_once "head.php";
    include_once "php/config.php";

    $sql_user = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['session_id']}'");
    $row = mysqli_fetch_assoc($sql_user);

    if(!isset($_SESSION['session_id'])) {
        header("location: login.php");
    }
    $profile_page = TRUE;

?>
<script src="../javascript/modal_control.js" defer></script>
<body class="other__page">
    <?php include "components/menu.php" ?>
    <div class="profile__menu">
        <div class="modal__container"><?php include_once "modals/music_modal.php" ?></div>
        <div class="profile__banner">
            <img src="php/uploads/profiles/<?php echo $row['img'] ?>">
        </div>
        <div class="profile__banner-space"></div>
        <div class="profile__items">
            <div class="profile__container">
                <div class="flex flex__h flex__text">
                    <h2>Upl</h2>
                    <iconify-icon icon="line-md:uploading-loop" width="20" height="20"></iconify-icon>
                    <h2>ad</h2>
                </div>
                <div class="flex flex__h upload">
                    <button class="btn__upload">
                        <div class="flex upload__container">
                            <div class="upload__container-icon">
                                <iconify-icon icon="mdi:music-note-plus"></iconify-icon>
                            </div>
                            <p>song</p>
                        </div>
                    </button>
                    <!-- <button>
                        <div class="flex upload__container">
                            <div class="upload__container-icon">
                                <iconify-icon icon="mdi:podcast"></iconify-icon>
                            </div>
                            <p>podcast</p>
                        </div>
                    </button> -->
                </div>
            </div>
            <div class="profile__container">
                <h2>My Songs</h2>
                <div class="category flex">
                    <div class="flex flex__h songs__collection">
                        <a href="#">
                            <div class="flex song__cont song__cont__main">
                                <div class="flex flex__h cont__display">
                                    <div class="cont__image">
                                        <img src="php/images/covers/image4.png">
                                    </div>
                                </div>
                                <div class="cont__play">
                                    <button>
                                        <iconify-icon class="play_i__menu" inline icon="material-symbols:play-arrow" width="25" height="25"></iconify-icon>
                                        <!-- <i class="fa-solid fa-pause"></i> -->
                                    </button>
                                </div>
                                <div class="cont__text__details">
                                    <div class="cont__text__details-title">
                                        <h4 class="title">Title song a aaa</h4>
                                    </div>
                                    <div class="cont__text__details-artist">
                                        <a class="artist" href="#at">artist</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>