!function ($) {
    $(function(){

        var $root = $('html, body');

        $('#nav a').click(function() {
            $('#nav a').parent().removeClass('active');
            $(this).parent().addClass('active');
            var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                window.location.hash = href;
            });
            return false;
        });

        $(document).on('keydown', '#rsvp_form', function(e){
            if(e.keyCode==13) e.preventDefault();
        });
        
        var t1 = new Date("April 20, 2014 09:00:00");
        var t2 = new Date();
        var dif = t1.getTime() - t2.getTime()
        var Seconds_from_T1_to_T2 = dif / 1000;

        var clock = $('.clock').FlipClock(Seconds_from_T1_to_T2, {
            clockFace: 'DailyCounter',
            countdown:true
        });
    })
}(window.jQuery)