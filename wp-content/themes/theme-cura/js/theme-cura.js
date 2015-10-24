(function($){
    $(document).ready(function(){
        $(window).resize(function(){
            $('.home .hero').css('min-height', $(window).height());
        });
        $(window).load(function(){
            $(window).resize();
        })
    });
})(jQuery);