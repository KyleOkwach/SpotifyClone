<?php
    session_start();
    $sql_user = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['session_id']}'");
    $row = mysqli_fetch_assoc($sql_user);

?>
<script src="../javascript/toggle_menu.js" defer></script>
<div class="flex flex__menu main__el main__el__menu main__el__top">
    <!-- menu -->
    <div class="flex flex__child">
        <div class=" flex flex__h nav__profile">
            <div class="nav__profile__image">
                <img src="php/uploads/profiles/<?php echo $row['img'] ?>">
            </div>
            <div class="text__container">
                <p class="text__mini">Hello</p>
                <div class="text__container__scroll">
                    <p class="name">
                        <a href="profile.php" class="link-strong">
                            <?php echo $row['username'] ?>
                        </a>
                    </p>
                </div>
            </div>
            <button class="nav__profile__toggle"><iconify-icon icon="material-symbols:chevron-right" class="chevron" width="30" height="30"></iconify-icon></button>
            <div class="nav__profile__toggle-dropdown">
                <ul>
                    <?php
                        if(!$profile_page) {
                            echo '
                            <li>
                                <a href="profile.php">
                                    <div class="link__content">
                                        <p>Profile</p>
                                        <iconify-icon icon="iconoir:profile-circled" width="20" height="20"></iconify-icon>
                                    </div>
                                </a>
                            </li>
                            ';
                        }
                    ?>
                    <li>
                        <a href="#">
                            <div class="link__content">
                                <p>Notifications</p>
                                <iconify-icon icon="ic:baseline-notifications-active" width="20" height="20"></iconify-icon>
                                <div class="notification__count">9+</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="link__content">
                                <p>Settings</p>
                                <iconify-icon icon="material-symbols:settings-outline" width="20" height="20"></iconify-icon>
                            </div>
                        </a>
                    </li>
                    <br>
                    <hr>
                    <li>
                        <a class="#" href="/logout/">
                            <div class="link__content">
                                <p>Log Out</p>
                                <iconify-icon icon="ri:logout-box-line" width="20" height="20"></iconify-icon>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <a href="index.php"><h2 class="logo"><i class="fa-solid fa-infinity"></i> Unify</h2></a> -->
        <div class="list list__menu__options">
            <h3>Menu</h3>

            <ul class="list">
                <li class="link link__main">
                    <a href="index.php">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <iconify-icon icon="material-symbols:home" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="link__fancy">Home</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <iconify-icon icon="ic:baseline-search" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="link__fancy">Search</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <iconify-icon icon="ic:baseline-library-music" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="link__fancy">Your Library</div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="flex flex__child">
        <hr>
        <div class="list list__menu__playlists">
            <h3>Library</h3>
            <ul class="list">
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <iconify-icon icon="carbon:recently-viewed" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="link__fancy">Recent</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <iconify-icon icon="mdi:cards-heart" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="link__fancy">Liked</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <iconify-icon icon="fluent:storage-20-filled" width="20" height="20"></iconify-icon>
                            </div>
                            <div class="link__fancy">Local</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>