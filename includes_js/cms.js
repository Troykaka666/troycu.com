$(document).ready(function() {
  //changging navbar background-color by scrolling
  $(window).scroll(function() {
    if ($(this).scrollTop() > 20) {
      $("#tab-nav").addClass("tab-scroll");
    } else {
      $("#tab-nav").removeClass("tab-scroll");
    }
  });
});
