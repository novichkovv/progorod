$ = jQuery.noConflict();
$(document).ready(function()
{
    $('body').on('submit','#login_form', function()
    {
        if(validate('login_form'))
        {
            var params = {
                action: 'login',
                get_from_form: 'login',
                callback: function(msg)
                {
                    if(msg == '1')
                    {
                        $("#error-login").slideDown();
                        return(false);
                    }
                    else return(true);
                }
            };
        }
        return false;
    });
    $("button[name='registration_btn']").click(function()
    {


    });
});
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
    $("#log-button").click(function()
    {
        $("#log").slideDown();
    });
    $("#log").click(function()
    {
        $(this).slideUp();
    });

});
