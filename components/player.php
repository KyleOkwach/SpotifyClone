<script src="../javascript/player.js" defer></script>
<div class="flex flex__player main__el main__el__player main__el__foot player">
    <div class="flex player__song">
        <!-- song details -->
        <div class="image__container player__song__image">
            <button class="player__song__image-toggle"><i class="chevron fa-solid fa-chevron-up"></i></button>
            <img src="php/images/covers/image1.png">
        </div>
        <div class="player__song__details">
            <div class="player__song__details-title">
                <div class="player__song__details-title-scroll">
                    <a href="#song"><h4 class="title">Not another song about love</h4></a>
                </div>
            </div>
            <div class="player__song__details-artist">
                <a class="artist" href="#at">artist</a>
            </div>
        </div>
        <div class="player__song__like">
            <!-- <i class="fa-solid fa-heart"></i> -->
            <iconify-icon inline icon="mdi:cards-heart-outline" width="20" height="20"></iconify-icon>
        </div>
    </div>
    <div class="flex flex__player__controls">
        <!-- controls -->
        <div class="flex__h player__controls player__controls__buttons">
            <button class="btn btn__media btn__media__shuffle">
                <iconify-icon inline icon="ph:shuffle-angular" width="25" height="25"></iconify-icon>
            </button>
            <button class="btn btn__media btn__media__forward">
                <iconify-icon inline icon="material-symbols:skip-previous" width="25" height="25"></iconify-icon>
            </button>
            <button class="btn btn__media btn__media__play">
                <iconify-icon class="play_i" inline icon="material-symbols:play-arrow" width="25" height="25"></iconify-icon>
            </button>
            <button class="btn btn__media btn__media__forward">
                <iconify-icon inline icon="material-symbols:skip-next" width="25" height="25"></iconify-icon>
            </button>
            <button class="btn btn__media btn__media__repeat">
                <iconify-icon class="repeat__i" inline icon="material-symbols:repeat" width="20" height="20"></iconify-icon>
            </button>
        </div>
        <div class="flex__h player__controls player__controls__timer">
            <!-- timer -->
            <div class="time__field">
                <div class="time__value time__current">00:00</div>
                <div class="time__range">
                    <div class="time__tracker"></div>
                    <audio src="php/uploads/music/BTR Worldwide 2020.mp3"></audio>
                    <input type="range" min="0" max="100" value="0" class="time__slider">
                </div>
                <div class="time__value time__length">00:00</div>
            </div>
        </div>
    </div>
    <div class="flex flex__h player__options">
        <!-- options -->
        <a href="#"><iconify-icon inline icon="material-symbols:queue-music" width="22" height="22"></iconify-icon></a>
        <div class="flex flex__h player__options__volume">
            <div class="player__options__volume-btn">
                <button class="player__options__volume-toggle">
                    <!-- <i class="volume fa-solid fa-volume-xmark"></i> -->
                    <iconify-icon class="volume" inline icon="material-symbols:volume-mute" width="20" height="20"></iconify-icon>
                </button>
            </div>
            <div class="player__options__volume__range">
                <div class="player__options__volume__range-tracker"></div>
                <input type="range" min="0" max="100" value="0" class="player__options__volume__range-slider">
            </div>
        </div>
    </div>
</div>'