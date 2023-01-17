<script src="../javascript/player.js" defer></script>
<script src="../javascript/songs.js" defer></script>
<audio id="player"></audio>
<div class="flex flex__songs main__el main__el__songs main__el__top">
    <div class="flex flex__child">
        <!-- navbar -->
        <div class="nav flex flex__h">
            <div class="flex flex__h nav__buttons">
                <button class="nav__button"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="nav__button"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="nav__list">
                <ul>
                    <div class="flex flex__h">
                        <li class="nav__link"><a href="#rec">Reccomended</a></li>
                        <li class="nav__link"><a href="#fol">Followed</a></li>
                        <li class="nav__link"><a href="#pod">Podcasts</a></li>
                    </div>
                </ul>
            </div>
        </div>
        <!-- songs -->
        <div class="category flex">
            <h3>Category name</h3>
            <div class="flex flex__h songs__collection">
            </div>
        </div>
    </div>
</div>