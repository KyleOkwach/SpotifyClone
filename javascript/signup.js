const form = document.querySelector("form"),
submitBtn = document.querySelector(".form__div__login-button"),
errorBox = document.querySelector(".form__error");

form.onsubmit = (e) => {
    e.preventDefault();
}

submitBtn.onclick = () => {
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/signup.php", true);

    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;

                if(data === "success") {
                    errorBox.textContent = "Account created successfully!";
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