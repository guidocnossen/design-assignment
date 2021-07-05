(function( $ ){
    
    $.fn.maps = function ( options ) {
        
        return this.each(function() {
            
            var $element = $(this);

            var markers = [];
            
            var $target = $($element.data('target')),
                $markers = $('.marker', $element),
                lat = $element.data('lat'),
                lng = $element.data('lng'),
                zoom = $element.data('zoom') || 15;

            var center = [lat, lng];
            
            var map = new GMaps({
                el: $element.data('target'),
                lat: lat,
                lng: lng,
                zoom: zoom
            });

            $markers.each(function(i, e) {
                var $e = $(e);

                var lat = $e.data('lat'),
                    lng = $e.data('lng'),
                    title = $e.data('title'),
                    image = $e.data('image'),
                    icon = $e.data('icon') || 'http://maps.google.com/mapfiles/marker_green.png';

                var marker = {
                    lat: lat,
                    lng: lng,
                    title: title,
                    icon: icon,
                    infoWindow: {
                        content: $('.infowindow-container', $e).html()
                    }
                    
                }

                map.addMarker(marker);
                
            });
        });
    };
}( jQuery ));