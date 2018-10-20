<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        width: 100%;
        height: 400px;
          
        background-color: grey;
      }
    </style>
  </head>
   <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 51.452399, lng: 5.482059};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiKndEnb7Q4hjhUT_AHZyTPBEiemHj2fg&callback=initMap">
    </script>
  </body>
</html>