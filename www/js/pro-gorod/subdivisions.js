/**
 * Created by novichkov on 23.11.14.
 */
$(document).ready(function()
{
    $("#get_geo").click(function()
    {
        if(navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition( getPosition, errorPosition );
        }
        else
        {
            $("#hand_coords").slideDown();
        }
    });
});

function getPosition(position)
{
    console.log(position);
    var params = {
        action: 'set_client_location',
        values: {
            'latitude': position.coords.latitude,
            'longitude': position.coords.longitude,
            'speed': position.coords.speed,
            'accuracy': position.coords.accuracy,
            'timestamp': position.timestamp
        },
        callback: function()
        {
            var sign = window.location.search ? '&' : '?';
            window.location.href = window.location.href + sign + 'geo=1';
        }
    };
    ajax(params);
}
function errorPosition()
{

}
