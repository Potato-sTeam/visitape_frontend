//Scroll
(function($){
    $(window).on("load",function(){
        $(".wraped-scroll").mCustomScrollbar({
        	theme:"rounded-dots-dark",
            buttonColor:"red",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: false,
        	scrollButtons: {enable: true}
        });
        /*$(".dashboard-contentPage, .Notifications-body").mCustomScrollbar({
        	theme:"dark-thin",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: true,
        	scrollButtons: {enable: true}
        });*/
    });
})(jQuery);
//Menu Sticky
;(function($){
    'use strict';

    var defaults = {
        topOffset: 100, //px - offset to switch of fixed position
        hideDuration: 300, //ms
        stickyClass: 'fixed'
    };

    $.fn.stickyPanel = function(options){
        if(this.length == 0) return this; // returns the current jQuery object

        var self = this,
            settings,
            isFixed = false, //state of panel
            stickyClass,
            animation = {
                normal: self.css('animationDuration'), //show duration
                reverse: '', //hide duration
                getStyle: function (type) {
                    return {
                        animationDirection: type,
                        animationDuration: this[type]
                    };
                }
            };

        // Init carousel
        function init(){
            settings = $.extend({}, defaults, options);
            animation.reverse = settings.hideDuration + 'ms';
            stickyClass = settings.stickyClass;
            $(window).on('scroll', onScroll).trigger('scroll');
        }

        // On scroll
        function onScroll() {
            if ( window.pageYOffset > settings.topOffset){
                if (!isFixed){
                    isFixed = true;
                    self.addClass(stickyClass)
                        .css(animation.getStyle('normal'));
                }
            } else {
                if (isFixed){
                    isFixed = false;

                    self.removeClass(stickyClass)
                        .each(function (index, e) {
                            // restart animation
                            // https://css-tricks.com/restart-css-animation/
                            void e.offsetWidth;
                        })
                        .addClass(stickyClass)
                        .css(animation.getStyle('reverse'));

                    setTimeout(function () {
                        self.removeClass(stickyClass);
                    }, settings.hideDuration);
                }
            }
        }

        init();

        return this;
    }
})(jQuery);


//run
$(function () {
    $('#fixed').stickyPanel();
});

  //Button Top
var btn = $('#back_top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});