let index = "0";

function imgSelect(d) {

    images = document.getElementsByClassName("image");

    data_index = d.getAttribute("data-index");
    if (data_index=="0") {
        if (index=="0"){

        } else if (index=="2") {
            images[0].classList.add("swapUp");
            images[2].classList.add("swapDown");
            images[0].setAttribute("data-view", "1");
            images[1].setAttribute("data-view", "2");
            images[2].setAttribute("data-view", "3");
            setTimeout(() => {
                images[2].classList.remove("swapDown");
                images[0].classList.remove("swapUp");
            }, "500");
        } else {
            images[0].classList.add("swapUp");
            images[0].setAttribute("data-view", "1");
            images[1].setAttribute("data-view", "2");
            images[2].setAttribute("data-view", "3");
            setTimeout(() => {
                images[0].classList.remove("swapUp");
              }, "500");
        }
        index = 0
        
    } else if (data_index=="1") {
        if (index=="1"){

        } else if (index=="0"){
            images[1].classList.add("swapDown");
            images[0].setAttribute("data-view", "2");
            images[1].setAttribute("data-view", "1");
            images[2].setAttribute("data-view", "2");
            setTimeout(() => {
                images[1].classList.remove("swapDown");
              }, "500");
        } else if (index=="2"){
            images[1].classList.add("swapUp");
            images[0].setAttribute("data-view", "2");
            images[1].setAttribute("data-view", "1");
            images[2].setAttribute("data-view", "2");
            setTimeout(() => {
                images[1].classList.remove("swapUp");
              }, "500");
        }
        

        index = 1;
    } else if (data_index=="2") {
        if (index=="2"){

        } else if (index=="0") {
            images[0].classList.add("swapUp");
            images[2].classList.add("swapDown");
            images[0].setAttribute("data-view", "3");
            images[1].setAttribute("data-view", "2");
            images[2].setAttribute("data-view", "1");
            setTimeout(() => {
                images[2].classList.remove("swapDown");
                images[0].classList.remove("swapUp");
            }, "500");
        } else {
            images[2].classList.add("swapDown");
            images[0].setAttribute("data-view", "3");
            images[1].setAttribute("data-view", "2");
            images[2].setAttribute("data-view", "1");
            setTimeout(() => {
                images[2].classList.remove("swapDown");
            }, "500");
        }
        index = "2";
    }
}