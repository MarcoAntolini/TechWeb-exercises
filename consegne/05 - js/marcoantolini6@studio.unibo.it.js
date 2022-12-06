var images = document.querySelectorAll("img");

images.forEach(image => addEventListener("click", function () {
    image.forEach(img => img.removeAttribute("class"));
    this.setAttribute("class", "current");
    image.forEach(img => img.style.visibility = "hidden");
    this.style.visibility = "visible";
    this.previousElementSibling ? this.previousElementSibling.style.visibility = "visible" : null;
    this.nextElementSibling ? this.nextElementSibling.style.visibility = "visible" : null;
}));

images[0].click();

// function loadPage() {
//     for (var i = 2; i < images.length; i++) {
//         images[i].style.visibility = "hidden";
//     }
//     images[0].className = "current";
// }

// function imageClickHandler() {
//     for (var i = 0; i < images.length; i++) {
//         images[i].onclick = function () {
//             if (this.className != "current") {
//                 this.className = "current";
//                 this.style.visibility = "visible";
//                 for (var j = 0; j < images.length; j++) {
//                     if (images[j] != this) {
//                         images[j].removeAttribute("class");
//                         images[j].style.visibility = "hidden";
//                     }
//                 }
//                 var p = this.previousElementSibling;
//                 var n = this.nextElementSibling;
//                 if (p) {
//                     p.style.visibility = "visible";
//                 }
//                 if (n) {
//                     n.style.visibility = "visible";
//                 }
//             }
//         };
//     }
// }

// window.onload = function () {
//     loadPage();
// };
// imageClickHandler();