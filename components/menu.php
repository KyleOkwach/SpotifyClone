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
                    <p><?php echo $row['username'] ?></p>
                </div>
            </div>
            <button class="nav__profile__toggle"><i class="chevron fa-solid fa-chevron-right"></i></button>
            <div class="nav__profile__toggle-dropdown">
                <ul>
                    <li>
                        <a href="#">
                            <div class="link__content">
                                <p>Profile</p>
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="link__content">
                                <p>Notifications</p>
                                <i class="fa-solid fa-bell"><div class="notification__count">99+</div></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="link__content">
                                <p>Settings</p>
                                <i class="fa-solid fa-gear"></i>
                            </div>
                        </a>
                    </li>
                    <br>
                    <hr>
                    <li>
                        <a class="logout" href="logout.php">
                            <div class="link__content">
                                <p>Log Out</p>
                                <i class="fa-solid fa-right-from-bracket"></i>
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
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <i class="fa-solid fa-house"></i> 
                            </div>
                            <div class="link__fancy">Home</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="link__fancy">Search</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <i class="fa-solid fa-bookmark"></i>
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
                                <i class="fa-solid fa-clock"></i> 
                            </div>
                            <div class="link__fancy">Recent</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="link__fancy">Liked</div>
                        </div>
                    </a>
                </li>
                <li class="link link__main">
                    <a href="#">
                        <div class="flex flex__h link__content">
                            <div class="link__icon">
                                <i class="fa-solid fa-hard-drive"></i>
                            </div>
                            <div class="link__fancy">Local</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>