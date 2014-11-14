$(document).ready(function()
{
    var body = $('body');
    group_select('region','city');
    group_select('division','subdivision');
    $(body).on('change', "select[name='city']", function()
    {
        if($(this).val() != '')
            $(".street-input").removeAttr('disabled');
        else
            $(".street-input").attr('disabled', 'disabled');
    });
    $(body).on('input', ".street-input", function()
    {
        if($(this).val() != '' )
            $(".building-input").removeAttr('disabled');
        else
            $(".building-input").attr('disabled', 'disabled');
        $(this).closest('.address-group').find('.building-input').val('');
    });
    $(body).on('submit','#firm_form', function()
    {
        return validate('firm_form');
    });

    image_upload({
        'name': Math.round(Math.random()*10000000),
        'button': 'upload_logo'
    });
    $.mask.definitions['Z'] = '[-_a-zA-Zа-яА-Я\/\.0-9&?=%]';
    $.mask.placeholder = ' ';
    $("input[name='site']").mask('http://ZZZZZ?ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ');
    $(".phone").mask('+7(999)999-99-99');
    suggest({
        'action': 'street_suggest',
        'input': '.street-input',
        'get_data': {
            'city': 'select[name="city"]'
        }
    });
    $(body).on('focus', '.building-input', function()
    {
        $(this).closest('.address-group').find('.street-input').addClass('resource');
    });
    $(body).on('focusout', '.building-input', function()
    {
        $(this).closest('.address-group').find('.street-input').removeClass('resource');
    });
    suggest({
        'action': 'building_suggest',
        'input': '.building-input',
        'get_data': {
            'city': 'select[name="city"]',
            'street': ".street-input.resource"
        }
    });
    $(body).on('click', ".add-address-group", function()
    {
        var button = $(this);
        var id = $(".address-group").length;
        var params = {
            'action' : 'add_address_group',
            'id' : id,
            'callback': function(msg)
            {
                $(button).closest('.address-group').after(msg);
                $(".phone").mask('+7(999)999-99-99');
                $(button).remove();
            }
        };
        ajax(params);

    });
    $('body').on('change', '.workdays_radio', function()
    {
        if($(this).prop('checked'))
        {
            $(this).closest('ul').find('li').each(function()
            {
                $(this).find('ul').addClass('hidden');
            });
            $(this).closest('li').find('ul').removeClass('hidden');
        }
    });

});

