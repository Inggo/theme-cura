(function($){
    $(document).ready(function(){
        $(window).resize(function(){
            // Set homepage hero section background minimum height
            $('.home .hero').css('min-height', $(window).height());
        });

        // Trigger resize on page load
        $(window).load(function(){
            $(window).resize();
        });

        // Youtube video player
        $('.youtube-video-container').click(function(){
            if (!$(this).hasClass('playing')) {
                $(this).addClass('playing');
                $(this).find($('iframe')[0].src += '?autoplay=1');
            }
        });

        // Back to top button
        $('.back-to-top').click(function(){
            $('html,body').animate({
                scrollTop: 0
            });
        });

    });
})(jQuery);