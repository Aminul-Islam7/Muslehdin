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
  backDelay: 3000,
});

$("#searchbar").focus(function () {
  $(".search .placeholder").hide();
});

$("#searchbar").focusout(function () {
  $(".search .placeholder").show();
});
