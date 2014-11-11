$ = jQuery.noConflict();
$(document).ready(function()
{
    $('.nav-sidebar li').click(function()
    {
        $('.nav-sidebar li').each(function()
        {
            $(this).removeClass('chosen');
        });
        $(this).find('ul').slideToggle();
//        if($(this).find('ul').css('display') == 'block')
//        {
//            $(this).addClass('chosen');
//            $(this).find('ul').removeClass('closed');
//        }
//        else
//        {
//            $(this).removeClass('chosen');
//            $(this).find('ul').addClass('closed');
//        }
        if($(this).find('ul').hasClass('closed'))
        {
            $(this).addClass('chosen');
            $(this).find('ul').removeClass('closed');
        }
        else
        {
            $(this).removeClass('chosen');
            $(this).find('ul').addClass('closed');
        }
    });
});