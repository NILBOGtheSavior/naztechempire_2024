
function selectBlog() {
    var iframe = document.getElementById("blog_post");
    let filename = getQueryParam("post");
    if (! filename ) {
        window.location.replace("/blog.php");

    } else {
        let loc = "/blog/" + filename + ".html";
        if (loc) {
            iframe.setAttribute("src", loc);
        } else {
            window.parent.location.replace("/blog.php");
        }
        
    }
}

function urlExists(url) {
    var http = new XMLHttpRequest();
    http.open('HEAD', url, false);
    http.send();
    if (http.status == 404)
        window.parent.location.replace("/blog.php");
}

function checkQueryParam() {
    let param = getQueryParam('account');
    openOverlay(param);
}

function getQueryParam(parameter) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(parameter);
}

function updateQueryParam(key, value) {
    const url = new URL(window.location.href);
    url.searchParams.set(key, value);
    window.history.pushState({}, '', url);
}

function clearQueryParam(key) {
    const url = new URL(window.location.href);
    url.searchParams.delete(key);
    window.history.pushState({}, '', url);
}


function initFrame() {
    var iframe = document.getElementById("blog_post");
    loc = iframe.getAttribute("src");
    urlExists(loc);
    iframe.style.height = iframe.contentWindow.document.body.scrollHeight + "px";
}

document.addEventListener("DOMContentLoaded", function() {

    selectBlog();

    document.querySelector('#blog_post').addEventListener("load", ev => {
        initFrame();
    })
 });