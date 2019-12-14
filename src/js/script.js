window.onscroll = function() {StickyScroll()};

var slider = document.getElementsByClassName("prev");
var navbar = document.getElementById("nav");

function StickyScroll() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}
