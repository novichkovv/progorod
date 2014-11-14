$(document).ready(function()
{
    var city = $("select[name='city']");
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
    $(body).on('keyup', ".street-input", function()
    {
        if($(this).val() != '' && $(this).val().length > 2)
            $(".building-input").removeAttr('disabled');
        else
            $(".building-input").attr('disabled', 'disabled');
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
    suggest({
        'action': 'street_suggest',
        'input': '.street-input',
//        'data': {
//            'city': $('select[name="city"]').val()
//        },
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
        'data': {
            'city': $(city).val(),
            'street': $(".street-input.resource").val()
        }
    });


});

