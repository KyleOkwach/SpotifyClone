const form = document.querySelector("form"),
loginBtn = document.querySelector(".form__div__login-button"),
errorBox = document.querySelector(".form__error");

form.onsubmit = (e) => {
    e.preventDefault();
}

loginBtn.onclick = () => {
    let xhr = new XMLHttpRequest
    xhr.open("POST", "php/login.php", true);

    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                // if successful
                let data = xhr.response;

                if(data === "success") {
                    errorBox.textContent = "Login successful!";
                    errorBox.style.borderColor = "green";
                    errorBox.style.color = "lightgreen";
                    errorBox.style.display = "block";

                    location.href = "index.php"
                } else {
                    errorBox.textContent = data
                    errorBox.style.borderColor = "red";
                    errorBox.style.color = "red";
                    errorBox.style.display = "block";
                }
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}
