
// ajax


// image toggle
const toggleImg = document.querySelector(".player__song__image-toggle"),
coverImage = document.querySelector(".player__song__image"),
chevron = document.querySelector(".chevron");
let imageLarge = false;

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

slider.oninput = (() => {
    let value = slider.value;
    let length = 169
    let currentTime = (value/100) * length
    let currPercent = (value/length) * 100

    slider.setAttribute("max", length)
    timerValue.textContent = toTime(value);
    fileLength.textContent = toTime(length);
    slideTracker.style.left = currPercent + "%";
});

let muted = false;

const setVol = () => {
    if(volSlider.value <= 0) {
        volIcon.classList.remove("fa-volume-high");
        volIcon.classList.remove("fa-volume-low");
        volIcon.classList.add("fa-volume-xmark");
    } else if(volSlider.value <= 50) {
        volIcon.classList.remove("fa-volume-high");
        volIcon.classList.remove("fa-volume-xmark");
        volIcon.classList.add("fa-volume-low");
    } else {
        volIcon.classList.remove("fa-volume-low");
        volIcon.classList.remove("fa-volume-xmark");
        volIcon.classList.add("fa-volume-high");
    }
}

volSlider.oninput = (() => {
    let vol = volSlider.value;
    
    setVol();
    
    volTracker.style.left = vol + "%";
    
    tempVol = volSlider.value;
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


