//hide content
$(".hide-homep").hide();

setTimeout(function() {
  $(document).ready(function() {

    var toggle = true;
    $(".sidenav-menu").click(function(){
      if(toggle){
        $(".navicon-1").removeClass("fa-bars");
        $(".navicon-1").addClass("fa-times");
        toggle = false;
        console.log("sdfasd   "+toggle);
      }else{
        $(".navicon-1").removeClass("fa-times");
        $(".navicon-1").addClass("fa-bars");
        toggle = true;
        console.log("sdfasfgd   "+toggle);
      };
      
      
    });

    //textarea charactercount
    $("input#input_text, textarea#textarea2").characterCounter();

    //datepicker
    $(".datepicker").datepicker();
    $(".datepicker").pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: "Today",
      clear: "Clear",
      close: "Ok",
      closeOnSelect: false // Close upon selecting a date,
    });
    //hide loader
    $(".loader").hide();
    //show homepage
    $(".hide-homep").fadeIn();
    //INIT sidenav
    $(".button-collapse").sideNav({
      menuWidth: 280
    });

    //INIT collapsible
    $(".collapsible").collapsible({});

    //INIT skillbar
    $(".skillbar").each(function() {
      $(this)
        .find(".skillbar-bar")
        .animate(
          {
            width: $(this).attr("data-percent")
          },
          6000
        );
    });

    //changging navbar background-color by scrolling
    $(window).scroll(function() {
      if ($(this).scrollTop() > 20) {
        $("#tab-nav").addClass("tab-scroll");
      } else {
        $("#tab-nav").removeClass("tab-scroll");
      }
    });
    //init materialbox
    $(".materialboxed").materialbox();

    //change the color of underline
    // TAB Color
    //$(".tabs").css("background-color", themeColor);

    // TAB Indicator/Underline Color
    $(".tabs>.indicator").css("background-color", "cyan");
    //INIT slider
    $(".slider").slider({
      indicators: false,
      transition: 1300,
      interval: 5000
    });
    //init carousel.slider

    $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {
        // If page is scrolled more than 50px
        $(".Gotop").fadeIn(200); // Fade in the arrow
      } else {
        $(".Gotop").fadeOut(200); // Else fade out the arrow
      }
    });
    $(".Gotop").click(function() {
      // When arrow is clicked
      $("body,html").animate(
        {
          scrollTop: 0 // Scroll to top of body
        },
        500
      );
    });

    //model
    $(".modal").modal();

    //scrollspy
    $(".scrollspy").scrollSpy();

    //toast
    $("#toast1").click(function() {
      Materialize.toast("Thank you for your honest feedback", 2000);
    });
    $("#toast2").click(function() {
      Materialize.toast("I am a math genius, 1+1 = 3", 2000);
    });
    $("#toast3").click(function() {
      Materialize.toast("I hate u", 2000);
    });
    $("#toast4").click(function() {
      Materialize.toast("I hate u so much", 2000);
    });
    $("#toast5").click(function() {
      Materialize.toast("Les't get marry if you are a girl", 2000);
    });

    //Init Collapsible
    $(".collapsible").collapsible();

    //scroll down smoothly
    $(".Godown").click(function() {
      $("body,html").animate(
        {
          scrollTop: "+=700"
        },
        500
      );
    });
  });

  //counting effect
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

   //moving text
   var movingText = true;
   setInterval(function(){
    if(movingText){
      $('#webdev').animate(
        {bottom: "50px"}, 1000
      );
      $("#selftaught").animate(
        {bottom: '45px'}, 1000
      );
      movingText = false;
    }else{
      $('#webdev').animate(
        {bottom: "0px"}, 1000
      );
      $("#selftaught").animate(
        {bottom: '5px'}, 1000
      );
      movingText = true;
    }
   }, 3000);
}, 800);
