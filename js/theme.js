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

