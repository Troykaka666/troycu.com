//blogpage-swtich function
function pageSwitch(evt, page){
    var i, blogpages, tabhovers;
    
    //get all elements with class="blog-page" and hide them
    blogpages = document.getElementsByClassName("blog-page");
    for ( i = 0; i<blogpages.length;i++){
        blogpages[i].style.display = "none";
    }
    
    //get all elements with class="tab-hover" and remove the class".active"
    tabhovers = document.getElementsByClassName("tab-hover");
    for(i = 0; i<tabhovers.length;i++){
        tabhovers[i].className = tabhovers[i].className.replace(" active", "");
    }
    
    //show the current tab, and add "active" class to the button 
    document.getElementById(page).style.display = "block";
    evt.currentTarget.className += " active";
}
 document.getElementById("defaultOpen").click();

// ===== Scroll to Top ==== 
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