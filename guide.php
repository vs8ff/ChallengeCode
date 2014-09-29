<h3> Direction Service</h3>

FROM:<input id="start">
TO:<input id="end">
<button id="button" >Show Direction</button><br>
<div id="map_canvas" style="height: 400px; width: 400px"></div>
<br>
<script type="javascript>
var directionDisplay;
var directionsService = new google.maps.DirectionsService();     
var map2;
function initialize()
{
            directionsDisplay = new google.maps.DirectionsRenderer();       
    var center = new google.maps.LatLng(0, 0);     
    var myOptions =
    {
            zoom:7,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: center
    }
    map2 = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    directionsDisplay.setMap(map2);
    var start = document.getElementById("start").value;   
    var end =  document.getElementById("end").value; 
    var request =
    {
            origin:start,
            destination:end,
            travelMode: google.maps.DirectionsTravelMode.DRIVING         
    };
    directionsService.route(request, function(response, status)
    {
            if (status == google.maps.DirectionsStatus.OK) 
            {
            directionsDisplay.setDirections(response);        
            }
    });
}

var button = document.getElementById('button');

var onClick = function() {
    initialize();
};

button.addEventListener('click', onClick, false);
</script>