const dropdownToggle = document.querySelector(".nav__profile__toggle"),
dropdown = document.querySelector(".nav__profile__toggle-dropdown");

let dropdown_visible = false;

dropdownToggle.onclick = (e) => {
    e.preventDefault();
    if(!dropdown_visible) {
        dropdown.style.display = "block";
        dropdownToggle.style.transform = "rotate(" + 180 + "deg)";
    } else {
        dropdown.style.display = "none";
        dropdownToggle.style.transform = "rotate(" + 0 + "deg)";
    }
    dropdown_visible = !dropdown_visible;
}