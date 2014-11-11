$ = jQuery.noConflict();
$(document).ready(function()
{
    $('[data-toggle=offcanvas]').click(function () {
        $('.row-offcanvas').toggleClass('active')
    });
    new WOW().init();
    $("#comment_textarea").focus(function()
    {
        $(this).animate({'height': '200px'}, 100);
    });
    $("a[data-toggle='tab']").click(function()
    {
        $('.tab-button').each(function()
        {
            $(this).removeClass('act');
        });
        $(this).parent('.tab-button').addClass('act');
    });

});
var validate = function validate(form_id)
{
    var form = $("#" + form_id);

    var validate = true;
    $('.error-require, .error-validate').each(function()
    {
        $(this).slideUp();
    });
    $(form).find('[data-require="1"]').each(function()
    {
        if(!$(this).val() || $(this).val() == '')
        {
            $(this).parent().find('.error-require').slideDown();
            validate = false;
        }
    });
    $(form).find('[data-validate="mail"]').each(function()
    {
        var regexp = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
        if(!regexp.test($(this).val()))
        {
            if($(this).parent().find('.error-require').css('display') == 'none')
                $(this).parent().find('.error-validate').slideDown();
            validate = false;
        }
    });
    $(form).find('[data-validate="password"]').each(function()
    {
        if($(this).val() != $(form).find('[data-validate="password2"]').val())
        {
            if($(this).parent().find('.error-require').css('display') == 'none')
                $(this).parent().find('.error-validate').slideDown();
            validate = false;
        }
    });
    return(validate);
};
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
            }
        }
    )
}