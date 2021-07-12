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
      $("#backimg1").fadeIn();
      $("#backimg2").fadeIn();
      $("#backimg3").fadeIn();
    }
  }, 3000);
});
