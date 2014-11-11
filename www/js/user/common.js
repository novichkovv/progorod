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