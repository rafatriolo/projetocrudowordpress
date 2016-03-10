/**
 * Created by RafaT on 10/03/2016.
 */
jQuery(function($){
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('#menu-menu_secundario').css('display' , 'none');
        $('.primeiro').css('display' , 'none');
        $('#content').css('z-index' , '-1');
        $('#menu-menu-1').css({
            'background-color' :'#ed1c24',
            'padding' : '0'
        });
        $('.logo').css({
            'position' : 'absolute',
            'top' : '0'
        }).insertAfter('.navbar-header');

        $('.caret').css({
            'float' : 'right',
            'margin-top' : '7px'
        });
        $('#menu-menu-1 > li').css('border-bottom' , '1px solid #ccc');
        $('.navbar-toggle').hover(function(event){
            event.preventDefault();
            $('.icon-bar').css({
                'background-color' : 'transparent'

            });
        });


    }


});

