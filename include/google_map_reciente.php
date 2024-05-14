<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPLm6fP7MRTF1XO6Zmpw3cxG9CG47VcZY&callback=initMap"></script>
<script>
    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 19.414039815084177,
                lng: -99.27212962156234
            },
            zoom: 10.5,
            scrollwheel:false,
            draggable:true, 
            mapTypeId:google.maps.MapTypeId.ROADMAP
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 19.5026,
                lng: -99.1861
            },
            map: map,
            title: 'Sismo más reciente'
        });

        
    }
</script>