(function( root, $, undefined ) {
  "use strict";

  $(function () {
  // DOM ready, take it away

    /*
    * Replace all SVG images with inline SVG
    */
    jQuery("img.svg").each(function(){
      var $img = jQuery(this);
      var imgID = $img.attr("id");
      var imgClass = $img.attr("class");
      var imgURL = $img.attr("src");
      
      jQuery.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find("svg");
      
          // Add replaced image's ID to the new SVG
          if(typeof imgID !== "undefined") {
              $svg = $svg.attr("id", imgID);
          }
          // Add replaced image's classes to the new SVG
          if(typeof imgClass !== "undefined") {
              $svg = $svg.attr("class", imgClass+" replaced-svg");
          }
      
          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr("xmlns:a");
      
          // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
          if(!$svg.attr("viewBox") && $svg.attr("height") && $svg.attr("width")) {
              $svg.attr("viewBox", "0 0 " + $svg.attr("height") + " " + $svg.attr("width"));
          }
      
          // Replace image with new SVG
          $img.replaceWith($svg);
      
      }, "xml");
    });
        
         
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $(".flexslider").flexslider({
        animation: "slide"
      });
    });
         
    // Waypoints
/*
    var waypoints = $("#homeEvents").waypoint(
      function(direction) {
        console.log(this.element.id + "hit");
      }, {
        offset: '13%'
    });
*/
         
    $(".see-more").click( function () {
      var target = $("#homeEvents");
      
      $("html, body").animate({
        scrollTop: target.offset().top - 76
      }, 1000);
    });
    
    
    //Bible study accordion
    $(".classes > li > div").click(function () {
      if(false === $(this).next().is(":visible")) {
        $(".classes ul").slideUp(300);
      }
      $(this).next().slideToggle(300);
    });
    $(".classes ul:eq(0)").show();
    
    
    // Smooth Page Scrolling
    $("a[href*='#']:not([href='#'])").click(function() {
      if (location.pathname.replace(/^\//,"") === this.pathname.replace(/^\//,"") && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $("[name=' + this.hash.slice(1) +']");
        if (target.length) {
          $("html, body").animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
    
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
      if ($(this).scrollTop() > 580) {
        $(".scrollToTop").fadeIn();
      } else {
        $(".scrollToTop").fadeOut();
      }
    });

    //Click event to scroll to top
    $(".scrollToTop").click(function(){
      $("html, body").animate({scrollTop : 0},800);
      return false;
    });
    
    
	});

} ( this, jQuery ));