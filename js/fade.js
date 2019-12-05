$(document).ready(function() {
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
        /* Check the location of each desired element */
        fadein();
    });
    /* Check if client refreshed server, if so ? load container */
    fadein();
});

function fadein() {
    $('.fadein').each(function(i) {
        let bottom_of_object = $(this).position().top + $(this).outerHeight();
        let bottom_of_window = $(window).scrollTop() + $(window).height() + 200;
        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){
            $(this).animate({'opacity':'1'},750);
        }
    })
}