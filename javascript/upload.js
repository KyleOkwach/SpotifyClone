const form = document.querySelector(".modal__form"),
uploadBtn = document.querySelector(".btn__form__input"),
errorBox = document.querySelector(".form__error");

form.onsubmit = (e) => {
    e.preventDefault();
}

uploadBtn.onclick = () => {
    let xhr = new XMLHttpRequest;
    
    xhr.open("POST", "../php/upload.php", true);
    
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;

                if(data === "success") {
                    errorBox.textContent = "Successful upload";
                    errorBox.style.borderColor = "green";
                    errorBox.style.color = "lightgreen";
                    errorBox.style.display = "block";
                } else {
                    errorBox.textContent = data;
                    errorBox.style.borderColor = "red";
                    errorBox.style.color = "red";
                    errorBox.style.display = "block";
                    console.log(data);
                }
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}