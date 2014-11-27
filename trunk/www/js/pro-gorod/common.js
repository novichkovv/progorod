$ = jQuery.noConflict();
$(document).ready(function()
{
    $('body').on('submit','#login_form', function()
    {
        if(validate('login_form'))
        {
            var params = {
                action: 'login',
                get_from_form: 'login_form',
                callback: function(msg)
                {
                    if(msg == '1')
                    {
                        $("#error-login").slideDown();
                        return(false);
                    }
                    else if(msg == '2')
                        return true ;
                }
            };
             return ajax(params);
        }
        return false;
    });
    $('body').on('submit','#registration_form', function()
    {
        if(validate('registration_form'))
        {
            var params = {
                action: 'registration',
                get_from_form: 'registration_form',
                callback: function(msg)
                {
                    if(msg == '1')
                        $("#error-registration").slideDown();
                    else if(msg == '2')
                        $("#error-user_exists").slideDown();
                    else if(msg == '3')
                        $("#error-captcha").slideDown();
                    else
                        window.location.href = 'http://user.'+window.location.host;
                }
            };
            ajax(params);
        }
        return false;
    });

    $('body').on('submit','#comments_form', function()
    {
        return validate('comments_form');
    });
    $("#update_captcha").click(function()
    {
        $("#captcha").attr("src", 'http://'+window.location.host+'/libs/captcha/captcha.php?rnd='+Math.round(Math.random(0)*1000));
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