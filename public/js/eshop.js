
window.onload = function() {
    let placeholders = document.getElementsByClassName("placeholder");
    const array = Array.from(placeholders);
    array.forEach((element) => {
        element.classList.remove('placeholder');
    });

}

$("#myCarousel").on("slid.bs.carousel", function (e) {
    $("#myCarousel").carousel("2"); // Will slide to the slide 2 as soon as the transition to slide 1 is finished
});

$("#myCarousel").carousel("1"); // Will start sliding to the slide 1 and returns to the caller
$("#myCarousel").carousel("2");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.getElementById("navbar").style.backgroundColor = "#0e0e0ea1";
        document.getElementById("logo").classList.add("white-logo");
        let navs = document.getElementsByClassName("nav-link");
        const array = Array.from(navs);
        array.forEach((element) => {
            element.style.color = "#FFFFFF";
        });
    } else {
        document.getElementById("navbar").style.backgroundColor = "white";
        let navs = document.getElementsByClassName("nav-link");
        document.getElementById("logo").classList.remove("white-logo");
        const array = Array.from(navs);
        array.forEach((element) => {
            element.style.color = "#000000a6";
        });
    }
}
