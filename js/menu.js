let state = 0;


function toggleMenu(opt) {
    console.log(opt);
    menu = document.getElementById(opt);
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
