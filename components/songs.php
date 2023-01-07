<script src="../javascript/player.js" defer></script>
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