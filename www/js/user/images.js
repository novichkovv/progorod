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
});
