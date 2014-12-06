$ = jQuery.noConflict();
$(document).ready(function()
{
    $('body').on('click', '[data-close]', function()
    {
        $(this).closest("." + $(this).data('close')).remove();
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
};
var image_upload = function(params){
    var btn=$("#" + params.button);
    var group = $(btn).closest('.form-group');
    var status=$(group).find(".status");
    var preview = $(group).find(".preview");
    if(params.preview_height)
        $(preview).css('height', params.preview_height + 'px');
    if(params.preview_width)
        $(preview).css('height', params.preview_width + 'px');
    var extension;
    new AjaxUpload(btn, {
        action: 'http://' + document.domain,
        name: 'uploadfile',
        data: {
            'name': params.name,
            'ajax': true,
            'action': 'ajax_image_upload'
        },
        onSubmit: function(file, ext){
            extension = ext;
            if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
                status.text('Поддерживаемые форматы JPG, PNG или GIF');
                return false;
            }
            status.html('<img src="http://' + document.domain + '/images/main/preloader28.GIF" />');
        },
        onComplete: function(file, response){
            status.html('');
            if(response==="success")
            {
                $(preview).css('background-color', '#fff');
                $(preview).html('' +
                    '<img src="http://' + document.domain + '/uploads/' + (params.dir ? params.dir : 'temp/') + params.name + '.' + extension + '?'+Math.random()+'" />' +
                    '<input type="hidden" name="image" value="' + params.name + '.' + extension + '">' +
                    ( params.dir ? '<input type="hidden" name="dir" value="' + params.dir + '">' : '' ) +
                    ( params.width ? '<input type="hidden" name="width" value="' + params.width + '">' : '' ) +
                    ( params.height ? '<input type="hidden" name="height" value="' + params.height + '">' : '' ));
                $(btn).html('Изменить файл')
            } else
            {
                $('<li></li>').appendTo('#files').text('Файл не загружен' + file).addClass('error');
            }
        }
    });

};
var multi_upload = function upload(params)
{
    var btn=$("#" + params.button);
    var group = $(btn).closest('.form-group');
    var status=$(group).find(".status");
    var preview = $(group).find(".preview");
    if(params.preview_height)
        $(preview).css('height', params.preview_height + 'px');
    if(params.preview_width)
        $(preview).css('height', params.preview_width + 'px');
    var extension;
    new AjaxUpload(btn, {
        action: 'http://' + document.domain,
        name: 'uploadfile',
        data: {
            'name': $(params.container).length + '_' + params.name,
            'ajax': true,
            'action': 'ajax_multi_upload'
        },
        onSubmit: function(file, ext){
            console.log(file);
            extension = ext;
            if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
                status.text('Поддерживаемые форматы JPG, PNG или GIF');
                return false;
            }
            status.html('<img src="http://' + document.domain + '/images/main/preloader28.GIF" />');
        },
        onComplete: function(file, response){
            status.html('');
            if(response != "error")
            {
                $(params.container).last().before(response);
            }
            else
            {
                $('<li></li>').appendTo('#files').text('Файл не загружен' + file).addClass('error');
            }
        }
    });
};
var suggest = function suggest(params)
{
    var group = $(params.input).parent();
    $(group).append('<div class="suggests"></div>');
    var settings = params;
    $('body').on('keyup', params.input, function()
    {
        var input = $(this);
        if(!settings.data)settings.data = {};
        settings.data.value =  $(input).val();
        if(settings.get_data)
        {
            for(var key in settings.get_data)
            {
                settings.data[key] = $(settings.get_data[key]).val();
            }
        }
        var params = {
            'action': settings.action,
            values: settings.data,
            callback: function(msg)
            {
                var container = $(input).parent().find('.suggests');
                $(container).html('');
                if(!msg)return;
                var suggests = JSON.parse(msg);
                for(var i in suggests)
                {
                    $(container).append('<div class="suggest">' + suggests[i] + '</div> ');
                }
                var el = $(container).children(".suggest");
                $(el).mouseover(function()
                {
                    $(this).css('background-color', '#eee');
                });
                $(el).mouseout(function()
                {
                    $(this).css('background-color', '#fff');
                });
                $(el).click(function()
                {
                    $(input).val($(this).html());
                    $(container).html('');
                    suggested(input);
                });
                $('body:not(.suggest)').click(function()
                {
                    $(container).html('');
                })

            }
        };
        ajax(params);
    });
};
var suggested = function suggested(input){
    if(suggested.callback)suggested.callback(input);
};
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