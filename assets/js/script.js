$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    console.log("clicked");
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        event.preventDefault();
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 74,
          },
          0
        );
      }
    }
  });

$(window).scroll(function () {
  // if ($(window).scrollTop() > $(".navbar").height() + 1) {
  $(".navbar").toggleClass(
    "scrolled",
    $(window).scrollTop() > $(".navbar").height() + 1
  );
  // }
});

$(function () {
  let i = 1;

  setInterval(function () {
    $("#backimg" + i).fadeOut();
    i++;
    if (i > 3) {
      i = 1;
      $(".background-img").fadeIn();
    }
  }, 3000);
});

var typed = new Typed(".search .placeholder", {
  strings: ["Product Name, Brand, Model", "What are you looking for?"],
  typeSpeed: 30,
  showCursor: false,
  loop: true,
  loopCount: Infinity,
  backDelay: 4000,
});

$("#searchbar").focus(function () {
  $(".search .placeholder").hide();
});

$("#searchbar").focusout(function () {
  if ($("#searchbar").val() != "") {
    console.log($("#searchbar").val());
    $(".search .placeholder").hide();
  } else {
    $(".search .placeholder").show();
  }
});

// $(".count").counterUp();

$(".review-slider").slick({
  dots: true,
  arrows: false,
  infinite: true,
  speed: 700,
  autoplay: true,
  easing: "swing",
  autoplaySpeed: 2000,
  swipeToSlide: true,
  touchThreshold: 100,
  edgeFriction: 0.1,
  adaptiveHeight: true,
  lazyLoad: "ondemand",
  accessibility: true,
});

$(".brand-slider").slick({
  infinite: true,
  slidesToShow: 5,
  arrows: false,
  focusOnSelect: true,
  centerMode: true,
  centerPadding: "0",
  speed: 700,
  autoplay: true,
  autoplaySpeed: 2000,
  easing: "swing",
  swipeToSlide: true,
  touchThreshold: 100,
  edgeFriction: 0.1,
  // adaptiveHeight: true,
  lazyLoad: "ondemand",
  accessibility: true,
});

// $(".member").on("mouseover", function () {
//   $(this).addClass("slow-animation");
// });

// $(".member").on("mouseleave", function () {
//   $(this).removeClass("slow-animation");
// });

particlesJS("particles", {
  particles: {
    number: { value: 300, density: { enable: false, value_area: 800 } },
    color: { value: "#0055dd" },
    shape: {
      type: "circle",
      stroke: { width: 0, color: "#000000" },
      polygon: { nb_sides: 5 },
      image: { src: "img/github.svg", width: 100, height: 100 },
    },
    opacity: {
      value: 1,
      random: true,
      anim: { enable: true, speed: 1, opacity_min: 0, sync: false },
    },
    size: {
      value: 4,
      random: true,
      anim: { enable: false, speed: 4, size_min: 0.3, sync: false },
    },
    line_linked: {
      enable: false,
      distance: 150,
      color: "#ffffff",
      opacity: 0.4,
      width: 1,
    },
    move: {
      enable: true,
      speed: 2,
      direction: "none",
      random: true,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: { enable: false, rotateX: 600, rotateY: 600 },
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: true, mode: "bubble" },
      onclick: { enable: true, mode: "repulse" },
      resize: true,
    },
    modes: {
      grab: { distance: 400, line_linked: { opacity: 1 } },
      bubble: {
        distance: 250,
        size: 8,
        duration: 4.875124875124875,
        opacity: 0.055944055944055944,
        speed: 3,
      },
      repulse: { distance: 250, duration: 0.4 },
      push: { particles_nb: 4 },
      remove: { particles_nb: 2 },
    },
  },
  retina_detect: true,
});
var count_particles, stats, update;
stats = new Stats();
stats.setMode(0);
stats.domElement.style.position = "absolute";
stats.domElement.style.left = "0px";
stats.domElement.style.top = "0px";
document.body.appendChild(stats.domElement);
count_particles = document.querySelector(".js-count-particles");
update = function () {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);
