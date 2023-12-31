let state = 0;


function toggleMenu() {
    menu = document.getElementById("hamburger_menu");
    if (state == 0) {
        menu.style.display = "flex";
        state = 1;
    }
    else {
        menu.style.display = "none";
        state = 0;
    }
}

function handleResize() {
    if (state === 1 && window.innerWidth) {
        menu.style.display = "none";
        state = 0;
    }
}

window.addEventListener("resize", handleResize);
