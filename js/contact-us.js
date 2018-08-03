function myMap() {
	var center = new google.maps.LatLng(1.3483, 103.6831);
	var mapCanvas = document.getElementById("map");
	var mapOptions = {center: center, zoom: 15};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({position:center});
	marker.setMap(map);
}