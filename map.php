<?php include "header.php" ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">OUR LOCATION</h3>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row text-center">
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBadKqsUs8PQn8j7FtgvcxQvPekwu3PpzQ&callback=initMap" async defer></script>
            <script>
                function initMap() {
                    var map = new google.maps.Map(document.getElementById("map"), {
                        center: {
                            lat: 10.851795,
                            lng: 106.757491
                        },
                        zoom: 15
                    });

                    var latLng = {
                        lat: 10.851795,
                        lng: 106.757491
                    }

                    // create map with center is latLng
                    // code

                    // each marker define one point
                    var marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                    });

                    var latLng = {
                        lat: 21.0168864,
                        lng: 105.7855574
                    }
                    var markers = [];

                    // create map with center is latLng
                    // code

                    var geocoder = new google.maps.Geocoder;
                    var infowindow = new google.maps.InfoWindow();

                    map.addListener("click", function(e) {
                        // Clear all old markers after click
                        for (var i = 0; i < markers.length; i++) {
                            markers[i].setMap(null)
                        }
                        markers = [];

                        // Create new marker with position is e.latLng
                        // code

                        geocoder.geocode({
                                "location": e.latLng
                            },
                            function(results, status) {
                                if (status === google.maps.GeocoderStatus.OK) {
                                    if (results[0]) {
                                        infowindow.setContent(
                                            "<div>" +
                                            "<b>Address :</b> " + results[0].formatted_address + "<br>" +
                                            "<b>Latitude :</b> " + results[0].geometry.location.lat() + "<br>" +
                                            "<b>Longitude :</b> " + results[0].geometry.location.lng() +
                                            "</div>"
                                        );
                                        infowindow.open(map, marker);
                                    } else {
                                        console.log("No results found");
                                    }
                                } else {
                                    console.log("Geocoder failed due to: " + status);
                                }
                            }
                        );

                        map.panTo(marker.position); // Set new point to center of map

                        markers.push(marker); // add new marker to markers array
                    });
                }
            </script>
            <div id="map" style="width:100%;height:400px;"></div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.html" ?>