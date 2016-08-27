// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());
// Place any jQuery/helper plugins in here.
$(document).ready(function() {
  var owl = $('#owl-demo');
  owl.owlCarousel({
    items : 4,
     rtl:true,
    stagePadding: 50,
    itemsDesktop : [1000,4],
    itemsDesktopSmall : [900,4],
    itemsTablet: [600,4],
    itemsMobile : false,
    lazyLoad : true,
    loop:false,
    center:true,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash'
  });
  var widthThis ="";
  $('.projectDescription').on('click', function(event){
    var $this = $(this).parents('.owl-item');
    var widthThis = $this.width();
      $this.css("width",widthThis * 2).addClass('clicked');
      $(".owl-item").css({
        "opacity": "0.3",
        "pointer-events": "none",
      });
      $this.css({
        "opacity": "1",
        "pointer-events": "all",
      });
      $this.find('.projectImg').fadeOut( "slow" );
      $this.find('.projectContent').fadeIn( "slow" ).removeClass("hidden");
        if($this.find(".projetoHome").data("hash") == "4"){
            $(".owl-wrapper").animate({
              left: - widthThis ,
            }, 500, function() {
            });
        }
  });
   $('.close').on('click', function(event){
    var $this = $(this).parents('.owl-item');
    var widthThis = $this.width();
    if($this.hasClass('clicked')){
      $this.css("width",widthThis / 2).removeClass('clicked');
      $this.find('.projectImg').fadeIn( "slow" );
      $this.find('.projectContent').fadeOut( "slow" ).addClass("hidden");
      $(".owl-item").css({
        "opacity": "1",
        "pointer-events": "all",
      });
       if($this.find(".projetoHome").data("hash") == "4"){
            $(".owl-wrapper").animate({
              left: 0,
            }, 500, function() {
            });
        }
    }
  });

});
