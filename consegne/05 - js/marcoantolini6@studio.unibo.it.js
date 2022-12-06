var images = document.querySelectorAll("img");

images.forEach(image => image.addEventListener("click", function () {
    images.forEach(img => img.removeAttribute("class"));
    this.setAttribute("class", "current");
    images.forEach(img => img.style.visibility = "hidden");
    this.style.visibility = "visible";
    this.previousElementSibling ? this.previousElementSibling.style.visibility = "visible" : null;
    this.nextElementSibling ? this.nextElementSibling.style.visibility = "visible" : null;
}));

images[0].click();