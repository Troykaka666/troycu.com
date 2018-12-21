

        
/*about-project-tab*/
function switchProj(evt, projName) {
    var i, tabcontent, tablinks;
    // tabcontent is an array of all of the same class
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(projName).style.display = "block";
    evt.currentTarget.className += " active";
}

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();


// ===== Scroll to Top ==== 
$(document).ready(function(){

$('.js--nav-icon').click(function(){
    
    var icon =$('.js--nav-icon i');
    var nav = $('.overlay-content');
    
    
    if(icon.hasClass('fa-bars')){
        icon.addClass('fa-times');
        icon.removeClass('fa-bars');
    }else{
        icon.addClass('fa-bars');
        icon.removeClass('fa-times');
    }
    nav.slideToggle(100);
})

$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('.Gotop').fadeIn(200);    // Fade in the arrow
    } else {
        $('.Gotop').fadeOut(200);   // Else fade out the arrow
    }
});
$('.Gotop').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

// ===== Scroll effects ==== 
//$(selector).animate({params},speed,callback);
//The required params parameter defines the CSS properties to be animated.
//The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.
//The optional callback parameter is a function to be executed after the animation completes.
/*
   $('.js--scroll-to-plans').click(function () {
       $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000); 
    });
    
    $('.js--scroll-to-start').click(function () {
       $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000); 
    });
*/


 /* Navigation scroll */
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
//=========Image Popup============
    $('.image-link').magnificPopup({type:'image'});

    $('.galleryItem').magnificPopup({
     gallery: {
          enabled: true
        },
      type: 'image'
      // other options
    });

    
    /*Animations on scroll*/
 $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeInUp');
    }, {
        offset: '80%'
    });
 $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeInUp');
    }, {
        offset: '80%'
    });
 $('.js--wp-4').waypoint(function(direction) {
        $('.js--wp-4').addClass('animated fadeInUp');
    },{
     offset:'90%'
 });
 $('.js--wp-5').waypoint(function(direction) {
        $('.js--wp-5').addClass('animated fadeInUp');
    },{
     offset:'90%'
 });
 $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated fadeInUp');
    },{
     offset:'90%'
 });
 $('.js--wp-6').waypoint(function(direction) {
        $('.js--wp-6').addClass('animated fadeInLeft');
    },{
     offset:'90%'
 });
 $('.js--wp-7').waypoint(function(direction) {
        $('.js--wp-7').addClass('animated fadeInRight');
    },{
     offset:'90%'
 });
 $('.js--wp-8').waypoint(function(direction) {
        $('.js--wp-8').addClass('animated fadeInUp');
    },{
     offset:'90%'
 });
});












