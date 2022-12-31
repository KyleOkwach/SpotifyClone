const toggleBtn = document.querySelector(".toggle-pass"),
eye = document.querySelector(".eye"),
field = document.querySelector(".pass");
let visible = false;

toggleBtn.onclick = ((e) => {
    e.preventDefault();
    
    if(!visible) {
        eye.classList.remove("fa-eye-slash");
        eye.classList.add("fa-eye");
        field.setAttribute("type", "text");
    } else {
        eye.classList.remove("fa-eye");
        eye.classList.add("fa-eye-slash");
        field.setAttribute("type", "password");
    }
    
    visible = !visible;
    console.log(visible);
})