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
        {
            $(".street-input,.building-input").attr('disabled', 'disabled');
        }
        $(".street-input,.building-input").val("");
        $(".mall_suggest").remove();

    });
    $(body).on('keyup', ".street-input", function()
    {
        var building_input = $(this).closest('.address-group').find(".building-input");
        if($(this).val() != '' )
            $(building_input).removeAttr('disabled');
        else
        {
            $(building_input).attr('disabled', 'disabled');
        }
        $(this).closest('.address-group').find(".mall_suggest").remove();
        $(building_input).val('');
    });
    $(body).on('submit','#firm_form', function()
    {
        if(!validate('firm_form'))
        {
            $(".error-form").slideDown();
            if(!$('input[name="image"]').val() || $('input[name="image"]').val() == '')
            {
                $('input[name="image"]').parent().parent().parent().parent().find('.error-require').slideDown();
            }
            return false;
        }
        else
        {
            return true;
        }
    });
    $(body).on('focus', 'input, select, textarea', function()
    {
        $(".error-form").slideUp();
        $(this).closest('.form-group').find('.error-require, .error-validate').slideUp();
    });

    image_upload({
        'name': Math.round(Math.random()*10000000),
        'button': 'upload_logo'
    });
    $.mask.definitions['Z'] = '[-_a-zA-Zа-яА-Я\/\.0-9&?=%+]';
    $.mask.placeholder = ' ';
    $("input[name='site']").mask('http://ZZZZZ?ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ');
    $(".phone").mask('+7(999)999-99-99? ZZZZZZZZZZZZZZZ');
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
    $(body).on('click',".delete-address-group", function()
    {
        var id = $(this).closest('.address-group').attr('id');
        $("#delete_address_btn").attr('data-address', id);
    });
    $(body).on('click', '#delete_address_btn', function()
    {
        $("#" + $(this).data('address')).html('');
        $("#" + $(this).data('address')).parent().hide();
        if($(".delete-address-group").length == 1)
            $(".delete-address-group").remove();
    });
    suggested.callback = function(input)
    {
        if($(input).hasClass('building-input'))
            mall_suggest(input);
    };
    $(body).on('keyup', '.building-input', function()
    {
        mall_suggest($(this));
    });
    $(body).on('change', '.mall-checkbox', function()
    {
        if($(this).prop('checked'))
        {
            $(this).closest('.address-group').find('.mall-checkbox').prop('checked', false);
            $(this).prop('checked', true);
        }
    });
    $(".informer").mouseover(function()
    {
        $(this).popover('show');
    });
    $(".informer").mouseout(function()
    {
        $(this).popover('hide');
    });
});
var mall_suggest = function(building_input)
{
    var group = $(building_input).closest('.address-group');
    $(group).find('.mall_suggest').remove();
    var street_input = $(group).find('.street-input');
    var row = $(building_input).closest(".row");
    var params = {
        'action': 'mall_suggest',
        'values': {'street' : $(street_input).val(), 'building': $(building_input).val(), city: $("select[name='city']").val()},
        callback: function(msg)
        {
            var mall = JSON.parse(msg);
            for(var i in mall)
            {
                $(row).append('' +
                    '<div class="col-xs-12  mall_suggest">' +
                    '   <div class="checkbox">' +
                    '       <label>' +
                    '           <input class="mall-checkbox" type="checkbox" name="address[' + $(group).attr('id').substr(14) + '][id_mall]" value="' + mall[i].id + '"' + (i == 0 ? ' checked' : '') + '>' + mall[i].short_description + ' ' + mall[i].name +
                    '       </label>' +
                    '   </div> ' +
                    '</div> ');
            }
        }
    };
    ajax(params);
};


