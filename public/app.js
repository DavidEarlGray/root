import '../resources/js/bootstrap';
function initMap() {
    var mapOptions = {
      center: new google.maps.LatLng('45.7489','21.2087'),
      zoom: 13
    }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions)
    var MarkerOptions = {
      position: new google.maps.LatLng('45.748620','21.222800'),
      map:map
    }

    for(var x =0; x <= adds.length; x++) {

    
      var geocoder = new google.maps.Geocoder()
      geocoder.geocode({ 'address': adds[x] }, function(results, status) {
                    if (status === 'OK' && results[0]) {
                        var marker = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                        });
                        marker.metadata = {type: "point", id: x};
                    }
                });
              }
    let marker = new google.maps.Marker(MarkerOptions)
    

  }
  initMap()