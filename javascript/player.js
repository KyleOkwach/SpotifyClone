
// ajax
var player = document.getElementById("player");
player.setAttribute("src", "php/uploads/music/BTR Worldwide 2020.mp3");

// image toggle
const toggleImg = document.querySelector(".player__song__image-toggle"),
coverImage = document.querySelector(".player__song__image"),
chevron = document.querySelector(".chevron");
var imageLarge = false;



toggleImg.onclick = (() => {
    
    if(!imageLarge) {
        chevron.classList.remove("fa-chevron-up");
        chevron.classList.add("fa-chevron-down");

        coverImage.classList.remove("player__song__image");
        coverImage.classList.add("player__song__image-relative");
    } else {
        chevron.classList.remove("fa-chevron-down");
        chevron.classList.add("fa-chevron-up");

        coverImage.classList.remove("player__song__image-relative");
        coverImage.classList.add("player__song__image");
    }

    imageLarge = !imageLarge;
})

// sliders
const timerValue = document.querySelector(".time__current"),
fileLength = document.querySelector(".time__length"),
slideTracker = document.querySelector(".time__tracker"),
slider = document.querySelector(".time__slider"),
volSlider = document.querySelector(".player__options__volume__range-slider"),
volTracker = document.querySelector(".player__options__volume__range-tracker"),
volIcon = document.querySelector(".volume"),
volToggle = document.querySelector(".player__options__volume-toggle");

const toTime = (value) => {
    const minutes = Math.floor(value / 60).toLocaleString('en-US', {
        minimumIntegerDigits: 2,
        useGrouping: false
    });
    const seconds = (value % 60).toLocaleString('en-US', {
        minimumIntegerDigits: 2,
        useGrouping: false
    });

    return `${minutes}:${seconds}`;
}

// AUDIO CONTROLS


const playButton = document.querySelector(".btn__media__play"),
playIco = document.querySelector(".play_i");
var playing = false;
slider.setAttribute("max", (player.duration).toFixed(0));

playButton.onclick = () => {
    if(!playing) {
        player.play();
        playIco.setAttribute("icon", "material-symbols:pause-outline");
    } else {
        player.pause();
        playIco.setAttribute("icon", "material-symbols:play-arrow");
    }
    playing = !playing;
}

slider.oninput = (() => {
    let sliderValue = slider.value;
    let audioLength = (player.duration).toFixed(0);
    let currTime = ((sliderValue/229) * audioLength).toFixed(0);
    let currPercent = ((sliderValue/audioLength) * 100).toFixed(0);
    player.currentTime = currTime;

    slider.setAttribute("max", audioLength)
    timerValue.textContent = toTime(sliderValue);
    fileLength.textContent = toTime(audioLength);
    slideTracker.style.left = currPercent + "%";
});

// slider.value = currPercent;

// VOLUME CONTROLS
var muted = false;

const setVol = () => {
    if(volSlider.value <= 0) {
        // volIcon.classList.remove("fa-volume-high");
        // volIcon.classList.remove("fa-volume-low");
        // volIcon.classList.add("fa-volume-xmark");
        volIcon.setAttribute("icon", "material-symbols:volume-off");
    } else if(volSlider.value <= 50) {
        // volIcon.classList.remove("fa-volume-high");
        // volIcon.classList.remove("fa-volume-xmark");
        // volIcon.classList.add("fa-volume-low");
        volIcon.setAttribute("icon", "material-symbols:volume-down");
    } else {
        // volIcon.classList.remove("fa-volume-low");
        // volIcon.classList.remove("fa-volume-xmark");
        // volIcon.classList.add("fa-volume-high");
        volIcon.setAttribute("icon", "material-symbols:volume-up");
    }
}
tempVol = volSlider.value;
volSlider.oninput = (() => {
    let vol = volSlider.value;
    
    setVol();
    
    volTracker.style.left = vol + "%";
    
    tempVol = volSlider.value;
    console.log(volSlider.value);
});


volToggle.onclick = (() => {
    muted = !muted;

    if(muted) {
        volSlider.value = 0;
        volTracker.style.left = 0 + "%";
    } else {
        volSlider.value = tempVol;
        volTracker.style.left = tempVol + "%";
    }

    
    setVol();
})

let defaultVolume = 70;
tempVol = defaultVolume;

player.volume = defaultVolume/100;
volSlider.value = defaultVolume;
volTracker.style.left = defaultVolume + "%";

// REPEAT
const repeatBtn = document.querySelector(".btn__media__repeat"),
repeatIco  = document.querySelector(".repeat__i");

let repeat = false;

repeatBtn.onclick = () => {
    if(!repeat) {
        repeatIco.setAttribute("icon", "material-symbols:repeat-one");
        repeatIco.style.color = "#c2233e";
    } else {
        repeatIco.setAttribute("icon", "material-symbols:repeat");
        repeatIco.style.color = "";
    }

    repeat = !repeat;
}

setInterval(() => {
    setVol();

    player.volume = (volSlider.value)/100;
    volSlider.value = player.volume * 100;

    let sliderValue = slider.value;
    let audioLength = (player.duration).toFixed(0);
    let currPercent = ((sliderValue/audioLength) * 100).toFixed(0);

    slider.setAttribute("max", audioLength)
    timerValue.textContent = toTime(sliderValue);
    fileLength.textContent = toTime(audioLength);
    slideTracker.style.left = currPercent + "%";
    slider.value = player.currentTime;

    repeat ? player.loop = true : player.loop = false;
    if(player.ended){ playIco.setAttribute("icon", "material-symbols:play-arrow"); }
}, 500);