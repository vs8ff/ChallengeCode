<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>page demo</title>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css">
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
</head>
<body>
 <style type="text/css">
#map{
    width: 200px;
    height: 200px;
} 
.main button a:hover {text-decoration: none; background-color:yellow;color:blue}     
.ui-btn{ width: 70%;}    
.custom-btn{ width: 100%;}
 </style>
<div data-role="page" id="page1">
  <div data-role="header">
    <h1>Grocery Stores</h1>
  </div>
  <div role="main" class="ui-content">
     <p><a href="#ButtonEventPage" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Guide To Grocery Stores</a></p> 
     <p><a href="#ButtonEventPage1" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Build Grocery List</a></p> 
     <p><a href="#ButtonEventPage2" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Distance of food to stores</a></p> 	  
     <p><a href="#ButtonEventPage3" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Find Local&In-Season recipes</a></p> 	  
     <p><a href="#ButtonEventPage4" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Impact of Diet changes</a></p>
     <p><a href="#ButtonEventPage5" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Photo-Scan Your Shopping</a></p>
     <p><a href="#ButtonEventPage6" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Scan Bar-codes of Products</a></p>
     <p><a href="#ButtonEventPage7" class="ui-btn ui-shadow ui-btn-b ui-corner-all ui-overlay-shadow " data-transition="pop">Report Items Out-Of-Stock</a></p>	 
  </div>
  <div data-role="footer">
    <h3>&copy; Vj&Raju 2014 </h3>
  </div>
</div>
 
 <div data-role="page" id="ButtonEventPage">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Guide To Grocery Stores</h1>		  
     </div>
<div data-role="main" class="ui-content">	 
	 <h3> Direction Service</h3>
FROM:<input id="start">
TO:<input id="end">
<div data-role="collapsible" style="position:relative; left: 15%; top:15px; margin-top: -1.2em">
<h1><button id="button" class="ui-btn ui-btn-inline" >Show Direction</button><br></h1>
<p><div id="map_canvas" style="height: 400px; width: 600px"></div></p>
</div>
<br>
<br>

<form method="POST" action="get.php"  target="_blank" enctype="multipart/form-data">
Enter Zip-Code:<input name="ZipCode" id="Zip-Code">
<div style="position:relative; left: 17%; top:15px; margin-top: -1.2em">
<input type="submit" class="ui-btn ui-btn-inline ui-btn-b ui-btn-corner-all" value="Search By Zip-code" name="Search By Zip-code"></form>
<!--<button id="buttonZip">Search By Zip-code</button> -->
</div>
<br>
<br>
<form method="POST" action="get2.php" target="_blank" enctype="multipart/form-data">
Enter Grocery:<input id="grocery">
<div style="position:relative; left: 17%; top:15px; margin-top: -1.2em">
<input type="submit" class="ui-btn ui-btn-inline ui-btn-b ui-btn-corner-all" value="Search By Grocery name" name="buttongrocery"></form>
<br>

<!--<form method="POST" action="get3.php" target="_blank" enctype="multipart/form-data">
Enter StoreName:<input id="stores">
<input type="submit" value="Search By StoreName" name="buttonstore"> </form>
<br> -->
</div>
</div>
</div>

<div data-role="page" id="ButtonEventPage1">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Build Grocery List</h1>
     </div>
	 
	 
<form action="t1.php" method="post">
    <!--<textarea name="textarea1" id="textarea1"></textarea><br /> -->
    <input type="submit" value="Click to enter items" name="submit" />
</form>
<br />
</div>

<div data-role="page" id="ButtonEventPage2">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Distance of food to stores</h1>
     </div>
	    <form method="POST" action="distance.php">
	 <!--<select name="season">
<option value="summer">Summer</option>
<option value="Fall">Fall</option>
<option value="Spring">Spring</option></select> -->
<input type="submit" name="Enter Distance" value="Enter">
</form>
	 
</div>
<div data-role="page" id="ButtonEventPage3">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Find Local&In-Season recipes</h1>
     </div>
</div>
<div data-role="page" id="ButtonEventPage4">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Impact of Diet changes</h1>
     </div>
	 <h3 align="center">Select a season</h3>
	 <form method="POST" action="season.php">
	 <!--<select name="season">
<option value="summer">Summer</option>
<option value="Fall">Fall</option>
<option value="Spring">Spring</option></select> -->
<input type="submit" name="Enter Season" value="Enter Season">
</form>
</div>
<div data-role="page" id="ButtonEventPage5">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Photo-Scan Your Shopping</h1>
     </div>
</div>
<div data-role="page" id="ButtonEventPage6">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Scan Bar-codes of Products</h1>
     </div>
</div>
<div data-role="page" id="ButtonEventPage7">
     <div data-role="header">
     	  <a class="custom-btn" data-rel="back" data-icon="home">Home</a>
          <h1>Report Items Out-Of-Stock</h1>
     </div>
</div>

<script type="text/javascript">
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
	document.getElementById("start").innerHTML =="";   
    document.getElementById("end").innerHTML ==""; 
};

button.addEventListener('click', onClick, false);
</script>

</body>
</html>