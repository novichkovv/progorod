/**
 * Created by novichkov on 21.11.14.
 */
$ = jQuery.noConflict();
$(document).ready(function()
{
    alert(1);
});
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
