

function createDiv(code) {
    var div = document.createElement("div");
    div.classList.add("copyIcon");
    div.innerHTML = "<img src='/img/icons/copy.png'>";
    var cpFunction = function() {
        navigator.clipboard.writeText(code);
    };
    div.onclick = cpFunction;
    return div;
}



function codeCopyIcon() {
    var highlightedDivs = document.getElementsByClassName('highlighter-rouge');
    
    for (var i = 0; i < highlightedDivs.length; i++) {
        if (highlightedDivs[i].localName == "div"){
            let block = highlightedDivs[i].querySelector("code");
            let code = block.innerText;
            highlightedDivs[i].appendChild(createDiv(code));
        }
    }
}

document.addEventListener("DOMContentLoaded", function() {
    codeCopyIcon();
 });
