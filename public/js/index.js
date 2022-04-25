$(document).ready(function () {
  $(".home .owl-carousel").owlCarousel({
    loop: true,
    items: 1,
    nav: false,
    dots: true,
    center: true,
    autoplay: true,
    animateOut: "fadeOut",
  });

  $(".work .owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    center: true,
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
});

const navBar = document.getElementById("navBar");
const times = document.getElementById("times");
const toggles = document.getElementById("toggles");

toggles.addEventListener("click", () => {
  navBar.classList.add("active");
});

times.addEventListener("click", () => {
  navBar.classList.remove("active");
});
