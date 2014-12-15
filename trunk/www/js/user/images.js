/**
 * Created by novichkov on 05.12.14.
 */
$ = jQuery.noConflict();
$(document).ready(function()
{
    multi_upload({
        'name': Math.round(Math.random()*10000000),
        'button': 'multi_upload',
        'container': '.multi_upload'
    });
    var ias = $('#try').imgAreaSelect({
        'instance': true
//        aspectRatio: '1:1',
//        onSelectEnd: getSizes
    });
    var h =  $('#try').height() <  $('#try').width() ?  $('#try').height() :  $('#try').width();
    console.log(ias);
    ias.setSelection(0, 0,  h, h, false);
    ias.setOptions({ show: true });
    ias.update();

});
function getSizes(im,obj)
{
    var x_axis = obj.x1;
    var x2_axis = obj.x2;
    var y_axis = obj.y1;
    var y2_axis = obj.y2;
    var thumb_width = obj.width;
    var thumb_height = obj.height;
    console.log(thumb_height);
}
