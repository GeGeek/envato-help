
$(document).ready(function(){
    SyntaxHighlighter.all();

    $(window).scroll(function(){
        $('#menu a').each(function(){
            if ($($(this).attr('href')).offset().top-24 <= $(window).scrollTop()){
                $('#menu a').removeClass('selected');
                $(this).addClass('selected');
            }
        });
    });

    $('#menu a').click(function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top-24}, 'slow');
    });
});

function toggleMenu(){
    $('#menu').toggle('fast');
    
    if ($('#menu-button .icon').hasClass('show')){
        $('#menu-button .icon').removeClass('show');
        $('#menu-button .icon').addClass('hide');
    }
    else{
        $('#menu-button .icon').removeClass('hide');
        $('#menu-button .icon').addClass('show');
    }
}