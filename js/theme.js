/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */

/*
jQuery(document).ready(function($) {
    $('.carousel').carousel({
  		interval: 600	
  	})
});*/

/* Navbar is fixed when viewport is equal to Bootstrap "lg" environment */

function myResizeFunction() {
    $(document).ready(function () {    
        var bsEnv = findBootstrapEnvironment();    
        if(bsEnv != 'lg') {
            $('#navbar').removeClass('navbar-fixed-top');
            $('#content').removeClass('navbar-padding');
         }
        else {
            $('#navbar').addClass('navbar-fixed-top');
            $('#content').addClass('navbar-padding');
         }
    });

    function findBootstrapEnvironment() {    
        var envs = ['xs', 'sm', 'md', 'lg'];
        $el = $('<div>');
        $el.appendTo($('body'));

        for (var i = envs.length - 1; i >= 0; i--) {
            var env = envs[i];

            $el.addClass('hidden-'+env);
            if ($el.is(':hidden')) {
                $el.remove();
                return env
            }
        };
    }

};

$(document).ready(function() {
  $(window).resize(myResizeFunction).trigger('resize');
});





/**
*
* @desc A small plugin that checks whether elements are within
*     the user visible viewport of a web browser.
*     only accounts for vertical position, not horizontal.
*
* @author Sam Sehnert
* Copyright 2012, Digital Fusion
* Licensed under the MIT license.
* http://teamdf.com/jquery-plugins/license/
*/

(function($) {

  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

var win = $(window);

var allMods = $(".panel-grid-cell");

allMods.each(function(i, el) {
  var el = $(el);
  if (el.visible(true)) {
    el.addClass("already-visible"); 
  } 
});

win.scroll(function(event) {
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("come-in"); 
    } 
  });
  
});