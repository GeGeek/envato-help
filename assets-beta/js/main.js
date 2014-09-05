
$(document).ready(function(){
    SyntaxHighlighter.all();

    /*
     * Menu
     */
    $('#menu > li > a').unbind('click');
    $('#menu > li > a').bind('click', function(e){
        var $submenu = $(this).parent().find('ul');
        
        if ($submenu.hasClass('displayed')){
            $submenu.slideUp('fast', function(){
                $submenu.removeClass('displayed')
                        .addClass('hidden');
            });
        }
        else{
            $submenu.slideDown('fast', function(){
                $submenu.removeClass('hidden')
                        .addClass('displayed');
            });
        }
    });
    
    /*
     * Toggle.
     */
    $('#main .toggle-wrapper .toggle').unbind('click');
    $('#main .toggle-wrapper .toggle').bind('click', function(){
        var $toggleWrapper = $(this).closest('.toggle-wrapper');
        
        $toggleWrapper.find('.toggle-content').toggle('fast', function(){
            if ($toggleWrapper.hasClass('hidden')){
                $toggleWrapper.removeClass('hidden')
                              .addClass('displayed');
            }
            else{
                $toggleWrapper.removeClass('displayed')
                              .addClass('hidden');
            }
        });
    });
});

/*
 * Bulk toggle.
 */
function toggle(id,
                action){
    $('.toggle-wrapper.toggle-'+id).each(function(){
        var $toggleWrapper = $(this);
        
        if (action === 'display'
                && $toggleWrapper.hasClass('hidden')){
            $('.toggle-content', this).toggle('fast', function(){
                $toggleWrapper.removeClass('hidden')
                              .addClass('displayed');
            });
        }
        
        if (action === 'hide'
                && $toggleWrapper.hasClass('displayed')){
            $('.toggle-content', this).toggle('fast', function(){
                $toggleWrapper.removeClass('displayed')
                              .addClass('hidden');
            });
        }
    });
}