
$(document).ready(function(){
    SyntaxHighlighter.all();

    $('#main .toggle-wrapper .toggle').unbind('click');
    $('#main .toggle-wrapper .toggle').bind('click', function(){
        var $wrapper = $(this).closest('.toggle-wrapper');
        
        $wrapper.find('.toggle-content').toggle('fast', function(){
            if ($wrapper.hasClass('hidden')){
                $wrapper.removeClass('hidden')
                        .addClass('displayed');
            }
            else{
                $wrapper.removeClass('displayed')
                        .addClass('hidden');
            }
        });
    });
});