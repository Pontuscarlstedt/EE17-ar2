mapboxgl.accessToken = 'pk.eyJ1Ijoia2FyeWUiLCJhIjoiY2pwOXRtbWc1MGdmNjNwc2JmdGxzeDR5byJ9.whp8f2Ttws57ctAf_stuag';

var latNTI = 59.336885;
var lonNTI = 18.048323;

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [lonNTI, latNTI],
    zoom: 10
});

getLocation();

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    console.log("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
    var latHem = position.coords.latitude;
    var lonHem = position.coords.longitude;
    console.log("Latitude: " +  latHem +
    "Longitude: " + lonHem);

    var marker = new mapboxgl.Marker()
    .setLngLat([lonHem, latHem])
    .addTo(map);

    var postData = new FormData();
    postData.append("lat", latHem);
    postData.append("lon", lonHem);

    var ajax = new XMLHttpRequest();
    ajax.open("POST", "trafiklab.php", true);
    ajax.send(postData);

    ajax.addEventListener("loadend", function() {
        console.log(this.responseText);
    })


}
