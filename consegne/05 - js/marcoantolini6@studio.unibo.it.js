var images = document.querySelectorAll("img");

function loadPage() {
    for (var i = 2; i < images.length; i++) {
        images[i].style.visibility = "hidden";
    }
    images[0].className = "current";
}

function imageClickHandler() {
    for (var i = 0; i < images.length; i++) {
        images[i].onclick = function () {
            if (this.className != "current") {
                this.className = "current";
                this.style.visibility = "visible";
                for (var j = 0; j < images.length; j++) {
                    if (images[j] != this) {
                        images[j].removeAttribute("class");
                        images[j].style.visibility = "hidden";
                    }
                }
                var p = this.previousElementSibling;
                var n = this.nextElementSibling;
                if (p) {
                    p.style.visibility = "visible";
                }
                if (n) {
                    n.style.visibility = "visible";
                }
            }
        };
    }
}

window.onload = function () {
    loadPage();
};
imageClickHandler();