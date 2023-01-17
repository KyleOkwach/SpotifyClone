const audioDropContainer = document.querySelector(".upload__audio"),
audioBtn = document.querySelector(".upload__audio"),
aFileInput = document.getElementById("audio__file"),  // audio file
audioName = document.getElementById("audio__name"),
audioIcon = document.querySelector(".audio__icon");

const coverDropContainer = document.querySelector(".upload__image"),
coverBtn = document.querySelector(".upload__image"),
iFileInput = document.getElementById("image__file"),  // image file
coverName = document.getElementById("image__name"),
coverIcon = document.querySelector(".image__icon");

const exitBtn = document.querySelector(".btn__toggle__exit"),
openModal = document.querySelector(".btn__upload"),
modalContainer = document.querySelector(".modal__container");

let displayModal = false;

const dropFunc = (div, icon, file, name, button) => {
    let overContainer = false
    div.ondragover = div.ondragenter = (e) => {
        e.preventDefault();
        overContainer = true;
    }
    
    div.ondragexit = (e) => {
        e.preventDefault();
        overContainer = false;
    }

    let defaultIcon = icon.getAttribute("icon");
    let defaultText = name.innerText;
    
    setInterval(() => {
        if(overContainer) {
            icon.setAttribute("icon", "pixelarticons:drop-area");
            // name.innerText = "Drop file here";
        } else {
            icon.setAttribute("icon", defaultIcon);
            // name.innerText = defaultText;
        }
    }, 100);
    
    // droping file
    div.ondrop = (e) => {
        e.preventDefault();
        file.files = e.dataTransfer.files;
        name.innerText = file.files[0].name;
        console.log(e.dataTransfer.files);
        overContainer = false;
    }

    // button click
    button.onclick = (e) => {
        // e.preventDefault();
        file.click();
        setInterval(() => {
            name.innerText = file.files[0].name;
        }, 500)
        // file.files = e.dataTransfer.files;
    }
}

exitBtn.onclick = () => {
    displayModal = false;
}

openModal.onclick = () => {
    displayModal = true;
}

setInterval(() => {
    if(displayModal) {
        modalContainer.style.display = "flex";
    } else {
        modalContainer.style.display = "none";
    }
}, 100);
dropFunc(audioDropContainer, audioIcon, aFileInput, audioName, audioBtn);
dropFunc(coverDropContainer, coverIcon, iFileInput, coverName, coverBtn);