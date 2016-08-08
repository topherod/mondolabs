// jQuery Scrollstop Plugin v1.2.0
// https://github.com/ssorallen/jquery-scrollstop

(function (factory) {
  // UMD[2] wrapper for jQuery plugins to work in AMD or in CommonJS.
  //
  // [2] https://github.com/umdjs/umd

  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['jquery'], factory);
  } else if (typeof exports === 'object') {
    // Node/CommonJS
    module.exports = factory(require('jquery'));
  } else {
    // Browser globals
    factory(jQuery);
  }
}(function ($) {
  // $.event.dispatch was undocumented and was deprecated in jQuery 1.7[1]. It
  // was replaced by $.event.handle in jQuery 1.9.
  //
  // Use the first of the available functions to support jQuery <1.8.
  //
  // [1] https://github.com/jquery/jquery-migrate/blob/master/src/event.js#L25
  var dispatch = $.event.dispatch || $.event.handle;

  var special = $.event.special,
      uid1 = 'D' + (+new Date()),
      uid2 = 'D' + (+new Date() + 1);

  special.scrollstart = {
    setup: function(data) {
      var _data = $.extend({
        latency: special.scrollstop.latency
      }, data);

      var timer,
          handler = function(evt) {
            var _self = this,
                _args = arguments;

            if (timer) {
              clearTimeout(timer);
            } else {
              evt.type = 'scrollstart';
              dispatch.apply(_self, _args);
            }

            timer = setTimeout(function() {
              timer = null;
            }, _data.latency);
          };

      $(this).bind('scroll', handler).data(uid1, handler);
    },
    teardown: function() {
      $(this).unbind('scroll', $(this).data(uid1));
    }
  };

  special.scrollstop = {
    latency: 250,
    setup: function(data) {
      var _data = $.extend({
        latency: special.scrollstop.latency
      }, data);

      var timer,
          handler = function(evt) {
            var _self = this,
                _args = arguments;

            if (timer) {
              clearTimeout(timer);
            }

            timer = setTimeout(function() {
              timer = null;
              evt.type = 'scrollstop';
              dispatch.apply(_self, _args);
            }, _data.latency);
          };

      $(this).bind('scroll', handler).data(uid2, handler);
    },
    teardown: function() {
      $(this).unbind('scroll', $(this).data(uid2));
    }
  };
}));


// Controls when the background is what color

var colorPrimary = '#29B5E3';
var colorSecondary = '#2169A8';
var colorCompliment = '#FF5A36';
var colorOffWhite = '#F1F1F1';
var colorOffBlack = '#222222';
var mapDarkBlue = '#1a3774';


function isMiddleScrolledIntoView(elem) {
  var $elem = $(elem);
  var $window = $(window);

  var docViewTop = $window.scrollTop();
  var docViewMiddle = docViewTop + ( $window.height() / 2 );

  var elemTop = $elem.offset().top;

  return (elemTop <= docViewMiddle);

}

function isTopScrolledIntoView(elem) {
  var $elem = $(elem);
  var $window = $(window);

  var docViewTop = $window.scrollTop();
  var docViewMiddle = docViewTop + ( $window.height() * .8 );

  var elemTop = $elem.offset().top;

  return ( ( elemTop < docViewMiddle ) && (elemTop > docViewTop) );
}

function isBottomScrolledIntoView(elem) {
  var $elem = $(elem);
  var $window = $(window);

  var docViewTop = $window.scrollTop();
  var docViewBottom = docViewTop + $window.height();
  var docViewMiddle = docViewTop + ( $window.height() * .2 );

  var elemTop = $elem.offset().top;
  var elemBottom = elemTop + $elem.height();

  return ( ( elemBottom > docViewMiddle ) && (elemBottom < docViewBottom ) );
}

// Smooth scrolling
function mondolabsSmoothScroll(elem) {
  $('html,body').animate({
    scrollTop: $(elem).offset().top
  }, 800);
}

// Define page templates, sections, and colors
var pagesArray = [
	[
		'page-template-homepage',
		[
			['#homepage-banner', colorPrimary],
			['#homepageAgencyStatement', colorOffWhite], 
			['#homepageServices', colorSecondary],
			['#homepageClients', colorCompliment]
		]
	],
	[
		'page-template-about',
		[
			['#about-banner', colorSecondary],
			['#aboutExperience', colorOffWhite], 
			['#leadership', colorSecondary]
		]
	],
	[
		'page-template-services',
		[
			['#servicesLanding', colorCompliment],
			['#servicesListing', colorOffWhite]
		]
	],
	[
		'page-template-contact',
		[
			['#contact-banner', colorPrimary],
			['#contactMap', colorOffWhite], 
			['#contactForm', colorSecondary]
		]
	]
];
var pagesArrayLength = pagesArray.length;
function sectionSmoothScrollUp() {
	for (var i = 0; i < pagesArrayLength; i++) {
		var template = pagesArray[i][0];
		if ( $('body').hasClass(template) ) {
			var sectionsArray = pagesArray[i][1];
			var sectionsArrayLength = sectionsArray.length;
			for (var s = 0; s < sectionsArrayLength; s++) {
				if ( isTopScrolledIntoView(sectionsArray[s][0]) ) {
					mondolabsSmoothScroll(sectionsArray[s][0]);
				}
			}
		}
	}
}
function sectionSmoothScrollDown() {
	for (var i = 0; i < pagesArrayLength; i++) {
		var template = pagesArray[i][0];
		if ( $('body').hasClass(template) ) {
			var sectionsArray = pagesArray[i][1];
			var sectionsArrayLength = sectionsArray.length;
			for (var s = 0; s < (sectionsArrayLength - 1); s++) {
				if ( isBottomScrolledIntoView(sectionsArray[s][0]) ) {
					mondolabsSmoothScroll(sectionsArray[s][0]);
				}
			}
		}
	}
}


// FUNCTION TO CHANGE BODY BACKGROUND COLORS
function backgroundColorChange() {
	for (var i = 0; i < pagesArrayLength; i++) {
		var template = pagesArray[i][0];
		if ( $('body').hasClass(template) ) {
			var sectionsArray = pagesArray[i][1];
			var sectionsArrayLength = sectionsArray.length;
			for (var s = 0; s < sectionsArrayLength; s++) {
				if ( isMiddleScrolledIntoView(sectionsArray[s][0]) ) {
					$('body').css( 'background', sectionsArray[s][1] );
				}
			}
		}
	}
}
if (Modernizr.touch) {
  $("#big-video-wrap").remove();
  for (var i = 0; i < pagesArrayLength; i++) {
    var template = pagesArray[i][0];
    if ( $('body').hasClass(template) ) {
      var sectionsArray = pagesArray[i][1];
      var sectionsArrayLength = sectionsArray.length;
      for (var s = 0; s < sectionsArrayLength; s++) {
        $(sectionsArray[s][0]).css( 'background', sectionsArray[s][1] );
      }
    }
  }
} else {
  // FUNCTION TO SNAP SECTIONS INTO VIEW BASED ON SCROLL DIRECTION
  $(window).on("scrollstart",function(){
    var startingPoint = $(window).scrollTop();
    $(window).on("scrollstop",function(){
      var stoppingPoint = $(window).scrollTop();
      if (startingPoint > stoppingPoint) {
        $('html,body').stop();
        sectionSmoothScrollDown();
      }
      if (startingPoint < stoppingPoint) {
        $('html,body').stop();
        sectionSmoothScrollUp();
      }
    });
  });

  $(window).on('scroll', function() {
  	backgroundColorChange();
  });
  $(window).on('resize', function() {
  	backgroundColorChange();
  });
}

// Page transitions
$(window).on('load', function() {
	$('html').removeClass("initial-white-background");
});
$('a').click( function() {
	if (!$(this).hasClass("no-animation")) {
		$('body').css( 'background', colorOffWhite);
	}
});
