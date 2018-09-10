$(document).ready(function(){
    /**
    *   PRELOADER INIT
    **/
    $("#preloader").fadeOut("slow");
    $("body").fadeIn("slow");

    /**
    *      MATERIALIZE COMPONENT INITS
    **/
    $(".sidenav").sidenav(); // Initialize sidenav button
    $('.modal').modal(); // Initialize modal.
    $('select').formSelect(); // Initialize select in materialize forms.
    $('ul.tabs').tabs(); // Initialize tabs component.
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('.tooltipped').tooltip();
    $('.dropdown-trigger').dropdown();
    
    
    /**
    *   Page Classes: Set height %:
    **/
    $(".fullPage").css('height', $(window).height());
    $(".eightyPage").css('height', $(window).height()*0.8);
    $(".sixtyFivePage").css('height',  $(window).height()*0.65);
    $(".fourtyFivePage").css('height',  $(window).height()*0.45);
    $(".thirtyFivePage").css('height',  $(window).height()*0.35);
    $(".twentyPage").css('height',  $(window).height()*0.2);
    
    // On resize too.
    $(window).resize(function() {
      //resize just happened, makes sure fullpage is always fullpage.
      $(".fullPage").css('height', $(window).height());
      $(".eightyPage").css('height', $(window).height()*0.8);
      $(".sixtyFivePage").css('height',  $(window).height()*0.65);
      $(".fourtyFivePage").css('height',  $(window).height()*0.45);
      $(".thirtyFivePage").css('height',  $(window).height()*0.35);
      $(".twentyPage").css('height',  $(window).height()*0.2);
    });
    


});
