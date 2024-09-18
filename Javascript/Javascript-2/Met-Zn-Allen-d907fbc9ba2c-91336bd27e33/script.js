document.addEventListener("DOMContentLoaded", function () {
    var h1Element = document.querySelector("h1");
    h1Element.classList.add("blue");
    var paragraphs = document.querySelectorAll("p");
    paragraphs.forEach(function (paragraph) {
        paragraph.classList.add("custom-paragraph");
    });
});