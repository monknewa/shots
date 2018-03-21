window.onscroll = function () {
    myFunction();
    // categoryfn();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (document.body.clientWidth > 767 || window.width > 767) {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
}

var category = document.getElementById("category");

function categoryfn() {
    if (window.pageYOffset >= 170) {
        category.style.position = "fixed";
        category.style.top = "100px";
        category.style.minWidth = "400px";
    } else {
        category.style.position = "";
        category.style.top = "";
        category.style.width = "";
    }
    if (window.pageYOffset >= 976) {
        category.style.display = "none";
    } else {
        category.style.display = "";
    }

}
