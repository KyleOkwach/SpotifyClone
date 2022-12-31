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
            <i class="fa-solid fa-heart"></i>
        </div>
    </div>
    <div class="flex flex__player__controls">
        <!-- controls -->
        <div class="flex__h player__controls player__controls__buttons">
            <button class="btn btn__media btn__media__shuffle">
                <i class="fa-solid fa-shuffle"></i>
            </button>
            <button class="btn btn__media btn__media__forward">
                <i class="fa-solid fa-backward-step"></i>
            </button>
            <button class="btn btn__media btn__media__play">
                <i class="fa-solid fa-play"></i>
                <!-- <i class="fa-solid fa-pause"></i> -->
            </button>
            <button class="btn btn__media btn__media__forward">
                <i class="fa-solid fa-forward-step"></i>
            </button>
            <button class="btn btn__media btn__media__repeat">
                <i class="fa-solid fa-repeat"></i>
            </button>
        </div>
        <div class="flex__h player__controls player__controls__timer">
            <!-- timer -->
            <div class="time__field">
                <div class="time__value time__current">00:00</div>
                <div class="time__range">
                    <div class="time__tracker"></div>
                    <input type="range" min="0" max="100" value="0" class="time__slider">
                </div>
                <div class="time__value time__length">00:00</div>
            </div>
        </div>
    </div>
    <div class="flex flex__h player__options">
        <!-- options -->
        <a href="#"><i class="fa-solid fa-layer-group"></i></a>
        <div class="flex flex__h player__options__volume">
            <button class="player__options__volume-toggle">
                <!-- <i class="fa-solid fa-volume-xmark"></i>
                <i class="fa-solid fa-volume-off"></i>
                <i class="fa-solid fa-volume-low"></i> -->
                <i class="volume fa-solid fa-volume-xmark"></i>
            </button>
            <div class="player__options__volume__range">
                <div class="player__options__volume__range-tracker"></div>
                <input type="range" min="0" max="100" value="0" class="player__options__volume__range-slider">
            </div>
        </div>
    </div>
</div>'