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
        var building_input = $(this).closest('.address-group').find(".building-input");
        if($(this).val() != '' )
            $(building_input).removeAttr('disabled');
        else
            $(building_input).attr('disabled', 'disabled');
        $(building_input).val('');
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
            'values' : {'id' : id},
            'callback': function(msg)
            {
                $(button).closest('.address-group').closest('.panel').after(msg);
                $(".phone").mask('+7(999)999-99-99');
                if(!$('select[name="city"]').val())
                {
                    $(".street-input").last().attr('disabled', 'disabled');
                }
                $(button).parent().parent().remove();

            }
        };
        ajax(params);

    });
    $(body).on('change', '.workdays_radio', function()
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

    $(body).on('click', '.close-address-group', function()
    {
        $(this).closest('.panel').remove();
        var group = $(".address-group");
        $(group).last().append('' +
            '<div class="row">' +
            '   <div class="col-md-12">' +
            '       <button class="btn btn-sm btn-success add-address-group" type="button">Добавить еще адрес</button>' +
            ( $(group).length > 1 ? '       <button class="btn btn-sm btn-warning close-address-group" type="button">Отменить</button>' : '') +
            '   </div> ' +
            '</div> ');
    });
});

