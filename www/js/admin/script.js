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

var ajax = function ajax(params)
{
    if(!params.values)params.values = new Object;
    params.values.ajax = true;
    params.values.action = params.action;
    if(params.get_from_form)
    {
        $("#" + params.get_from_form + " input, #" + params.get_from_form + " textarea").each(function()
        {
            params.values[$(this).attr('name')] = $(this).val();
        });
    }
    $.ajax(
        {

            url: params.ulr ? params.url : '',
            type: 'post',
            data: params.values,
            success: function(result)
            {
                params.callback(result);
                params = null;
            }
        }
    )
};
