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
  backDelay: 3000,
});

$("#searchbar").focus(function () {
  $(".search .placeholder").hide();
});

$("#searchbar").focusout(function () {
  $(".search .placeholder").show();
});
