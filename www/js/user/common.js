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

});
var group_select = function group_select(name, child_name)
{
    $("select[name='" + name + "']").change(function()
    {
        var group = $(this).closest('.select-group');
        $(group).find('.error-require').each(function()
        {
            $(this).slideUp();
        });
        var id = $(this).val();
        var children = $("#" + name + "_children_" + id);
        var children_select = $(children).find('select');
        if($(group).find("." + name + "_select:visible").length)
        {
            $(group).find("." + name + "_select").slideUp(100, function()
            {
                $(this).find('select').removeAttr('data-require');
                $(this).find('select').removeAttr('name');
                $(children_select).attr('data-require', '1');
                $(children_select).attr('name', child_name);
                $(children).slideDown();
            });
        }
        else
        {
            $(children_select).attr('data-require', '1');
            $(children_select).attr('name', child_name);
            $(children).slideDown();
        }
    });
    $("select[name='" + child_name + "']").change(function()
    {
        $(this).closest('.form-group').find('.error-require').slideUp();
    });
};