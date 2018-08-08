
$(document).ready(function(){

    /**
    *   PAGE LOAD ANIMAITON
    **/
    $("#homeNavItem").css("border-bottom", "2px solid #F93822");

    $("#webExpert").animate({left: "0%"}, 600, function() {
        // Animation complete.
    }); 

    window.setTimeout(function(){
         $("#computerScientist").animate({left: "0%"}, 600, function() {
            // Animation complete.
        }); 
    }, 300);
    

  /**
  *  TRANSPARENT NAVBAR TRIGGER
  **/
  $(window).on('scroll', function() {
      var y_scroll_pos = window.pageYOffset;
      var scroll_pos_test = 0;             // set to whatever you want it to be

      if(y_scroll_pos > scroll_pos_test) {
        // SCROLL ICON
        $("#scrollReminderDiv").removeClass("animate-flicker");
        $("#scrollReminderDiv").addClass("hidden");

        // NAV
        $("nav").removeClass("transparent");
        $("nav").addClass("black");
        $("nav").addClass("z-depth-2");
        $(".brand-logo img").fadeIn("slow");
      } else {
        $("nav").addClass("transparent");
        $("nav").removeClass("black");
        $("nav").removeClass("z-depth-2");
        $("nav").removeClass("z-depth-2");
        $(".brand-logo img").fadeOut("fast");
      }
      
    /**
    *   Add scroll listeners:
    **/
    /* Check the location of each desired element */
    $('.hideme').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height()+200;

        /* If the object is completely visible in the window, fade it */
        if( bottom_of_window > bottom_of_object ){

            $(this).animate({'opacity':'1'},500);

        }

    }); 
      
    $('.dragLeft').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, drag it */
        if( bottom_of_window > bottom_of_object ){

            $(this).animate({'left':'0px'},700);

        }

    });
      
  });  

    


});
