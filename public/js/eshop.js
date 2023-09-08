window.onload = function () {
    let placeholders = document.getElementsByClassName("placeholder");
    const array = Array.from(placeholders);
    array.forEach((element) => {
        element.classList.remove("placeholder");
    });
};

window.onscroll = function () {
    scrollFunction();
};

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.getElementById("navbar").style.backgroundColor = "#0e0e0ea1";
        document.getElementById("icon").style.filter =
            "invert(96%) sepia(4%) saturate(16%) hue-rotate(142deg) brightness(104%) contrast(105%)";
        document.getElementById("cart-icon").style.filter =
            "invert(96%) sepia(4%) saturate(16%) hue-rotate(142deg) brightness(104%) contrast(105%)";
        document.getElementById("logo").classList.add("white-logo");
        document.getElementById("logo-mobile").classList.add("white-logo");
        let navs = document.getElementsByClassName("active");
        const array = Array.from(navs);
        array.forEach((element) => {
            element.style.color = "#FFFFFF";
        });
    } else {
        document.getElementById("navbar").style.backgroundColor = "white";
        document.getElementById("icon").style.filter =
            "invert(0%) sepia(100%) saturate(28%) hue-rotate(99deg) brightness(94%) contrast(106%)";
        document.getElementById("cart-icon").style.filter =
            "invert(0%) sepia(100%) saturate(28%) hue-rotate(99deg) brightness(94%) contrast(106%)";
        let navs = document.getElementsByClassName("active");
        document.getElementById("logo").classList.remove("white-logo");
        document.getElementById("logo-mobile").classList.remove("white-logo");
        const array = Array.from(navs);
        array.forEach((element) => {
            element.style.color = "#000000";
        });
    }
}

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("animation-active");
        } else {
            reveals[i].classList.remove("animation-active");
        }
    }
}

const cookiesBanner = document.querySelector(".cookies-banner");
if (cookiesBanner) {
    const cookiesBannerButton = cookiesBanner.querySelector("button");
    cookiesBannerButton.addEventListener("click", () => {
        cookiesBanner.remove();
    });
}

const loaderWrapper = document.querySelector(".loader-wrapper");

if (loaderWrapper) {
    window.addEventListener("load", function () {
        loaderWrapper.classList.add("fade-out-animation");
    });
}