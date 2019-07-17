<?php
$lat = $_GET['lat'];
$ln = $_GET['ln'];
 ?>
<div class="Panel">
  <div class="panel-heading">
    Cek Map
  </div>
  <div class="panel-body">
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
        <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
      </head>
      <body>
        <div id="map">

        </div>
        <script>
      function initMap() {
        var uluru = {lat: <?php echo $lat;?>, lng: <?php echo $ln;?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1jUOBXtFC_0OnERncar4oczZzBWshOcE&callback=initMap">
    </script>
      </body>
    </html>
  </div>
</div>
