var map;
var infowindow;
var directionsService;
var directionsDisplay;

function initMap() {
    navigator.geolocation.getCurrentPosition(
        function (position) {
            var userLatLng = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            createMap(userLatLng);
        },
        function errorCallback(error) {
            console.log(error);
            var fallbackLatLng = { lat: -34.88593094075316, lng: -156.79687500000003 }; // San Francisco, CA
            createMap(fallbackLatLng);
        }
    );
}

function createMap(centerLatLng) {
    map = new google.maps.Map(document.getElementById('map'), {
        center: centerLatLng,
        zoom: 15
    });

    infowindow = new google.maps.InfoWindow();
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();

    directionsDisplay.setMap(map);

    var userMarker = new google.maps.Marker({
        position: centerLatLng,
        map: map,
        title: 'Your Location'
    });
    var request = {
        location: centerLatLng,
        radius: '10000',
        type: ['hospital']
    };

    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);
}

function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        results.sort(function(a, b) {
            return google.maps.geometry.spherical.computeDistanceBetween(map.getCenter(), a.geometry.location) -
                   google.maps.geometry.spherical.computeDistanceBetween(map.getCenter(), b.geometry.location);
        });
        for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        var nearestHospital = results[0];
        createMarker(nearestHospital);
        calculateAndDisplayRoute(nearestHospital.geometry.location);
    }
}

function createMarker(place) {
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location,
        title: place.name
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
    });
}

function calculateAndDisplayRoute(destination) {
    var origin = map.getCenter();

    directionsService.route({
        origin: origin,
        destination: destination,
        travelMode: 'DRIVING'
    }, function(response, status) {
        if (status === 'OK') {
            directionsDisplay.setDirections(response);
        } else {
            console.error('Directions request failed due to ' + status);
        }
    });
}