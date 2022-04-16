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

// $(".fireworks").fireworks({
//   // opacity: "1",
//   width: "100%",
//   height: "100%",
// });

$(".search-icon").click(function () {
  $(".mobile-search").toggle();
});

$(".close-search").click(function () {
  $(".mobile-search").toggle();
});

$(document).mouseup(function (e) {
  var container = $(".mobile-search");
  var container2 = $("#searchbar");

  // if the target of the click isn't the container nor a descendant of the container
  if (
    container.is(e.target) &&
    container.has(e.target).length === 0 &&
    !container2.is(e.target) &&
    container2.has(e.target).length === 0
  ) {
    container.hide();
  }
});

$(".navbar-toggler").click(function () {
  $(".bar").toggle();
  $(".close").toggle();
  var $nav = $(".navbar");
  $nav.addClass(
    "scrolled",
    $(".close").is(":visible") || $("html, body").scrollTop() > $nav.height()
  );
  if (
    $(".bar").is(":visible") &&
    $("html, body").scrollTop() <= $nav.height()
  ) {
    $nav.removeClass("scrolled");
  }
});

$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass("scrolled", $("html, body").scrollTop() > $nav.height());
  });
});

$(window).scroll(function () {
  let height = $(window).scrollTop();
  if (height > 2000) {
    $(".gototop").fadeIn();
  } else {
    $(".gototop").fadeOut();
  }
});

$(".gototop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 1500);
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

$(function () {
  let i = 1;

  setInterval(function () {
    $("#bgimg" + i).fadeOut();
    i++;
    if (i > 4) {
      i = 1;
      $(".bgimg").fadeIn();
    }
  }, 400);
});

var typed = new Typed(".sf2 .placeholder", {
  strings: ["Product Name, Brand, Model", "What are you looking for?"],
  typeSpeed: 30,
  showCursor: false,
  loop: true,
  loopCount: Infinity,
  backDelay: 4000,
});

var typed2 = new Typed(".sf1 .placeholder", {
  strings: ["Product Name, Brand, Model", "What are you looking for?"],
  typeSpeed: 30,
  showCursor: false,
  loop: true,
  loopCount: Infinity,
  backDelay: 4000,
});

$(".searchbar1").focus(function () {
  $(".search .placeholder").hide();
});

$(".searchbar1").focusout(function () {
  if ($(".searchbar1").val() != "") {
    console.log($(".searchbar1").val());
    $(".search .placeholder").hide();
  } else {
    $(".search .placeholder").show();
  }
});

$(".searchbar2").focus(function () {
  $(".search .placeholder").hide();
});

$(".searchbar2").focusout(function () {
  if ($(".searchbar2").val() != "") {
    console.log($(".searchbar2").val());
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
  autoplaySpeed: 1000,
  easing: "swing",
  swipeToSlide: true,
  touchThreshold: 100,
  edgeFriction: 0.1,
  // adaptiveHeight: true,
  lazyLoad: "ondemand",
  accessibility: true,
  pauseOnFocus: false,
});

$(".team-slider").slick({
  dots: true,
  infinite: true,
  slidesToShow: 3,
  arrows: false,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 1000,
  easing: "swing",
  swipeToSlide: true,
  touchThreshold: 100,
  edgeFriction: 0.1,
  // adaptiveHeight: true,
  lazyLoad: "ondemand",
  accessibility: true,
  pauseOnFocus: false,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
      },
    },
  ],
});

// $(".member").on("mouseover", function () {
//   $(this).addClass("slow-animation");
// });

// $(".member").on("mouseleave", function () {
//   $(this).removeClass("slow-animation");
// });

particlesJS("particles", {
  particles: {
    number: { value: 100, density: { enable: false, value_area: 800 } },
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

LottieInteractivity.create({
  mode: "scroll",
  player: "#firstLottie",
  actions: [
    {
      visibility: [0, 1],
      type: "seek",
      frames: [0, 900],
    },
  ],
});
