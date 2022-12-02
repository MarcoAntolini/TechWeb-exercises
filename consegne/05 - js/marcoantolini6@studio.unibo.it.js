var images = document.querySelectorAll("img");

function hideAllImages() {
    for (var i = 2; i < images.length; i++) {
        images[i].style.visibility = "hidden";
    }
}

function addClassToFirst() {
    images[0].className = "current";
}

function imageClickHandler() {
    for (var i = 0; i < images.length; i++) {
        images[i].onclick = function () {
            if (this.className != "current") {
                this.className = "current";
                for (var j = 0; j < images.length; j++) {
                    if (images[j] != this) {
                        images[j].removeAttribute("class");
                        images[j].style.visibility = "hidden";
                    }
                }
                showCurrentImage(this);
            }
        };
    }
}

function showCurrentImage(img) {
    img.style.visibility = "visible";
    var p = img.previousElementSibling;
    var n = img.nextElementSibling;
    if (p) {
        p.style.visibility = "visible";
    }
    if (n) {
        n.style.visibility = "visible";
    }
}

window.onload = function () {
    hideAllImages();
    addClassToFirst();
};
imageClickHandler();