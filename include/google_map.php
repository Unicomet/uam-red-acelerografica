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

        const contentString =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">RIDA, Azcapotzalco</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion ubicada en la UAM Azcapotzalco" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/azcapotzalco.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/azcapotzalco.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";

        const infowindow = new google.maps.InfoWindow({
            content: contentString,
            ariaLabel: "RIDA",
            maxWidth: "800px",
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 19.5026,
                lng: -99.1861
            },
            map: map,
            title: 'RIDA, Azcapotzalco'
        });

        marker.addListener("click", () => {
            infowindow.open({
                anchor: marker,
                map,
            });
        });
        
        const contentRIDI =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">RIDI, Iztapalapa</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion ubicada en la UAM Iztapalapa" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/iztapalapa.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/iztapalapa.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";
        
        const infowindowRIDI = new google.maps.InfoWindow({
            content: contentRIDI,
            ariaLabel: "RIDI",
            maxWidth: "800px",
        });    
        var markerRIDI = new google.maps.Marker({
            position: {
                lat: 19.360,
                lng: -99.060
            },
            map: map,
            title: 'RIDI, Iztapalapa'
        });

        markerRIDI.addListener("click", () => {
            infowindowRIDI.open({
                anchor: markerRIDI,
                map,
            });
        });

        const contentRIDX =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">RIDX, Xochimilco</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion ubicada en la UAM Xochimilco" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/xochimilco.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/xochimilco.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";
        
        const infowindowRIDX = new google.maps.InfoWindow({
            content: contentRIDX,
            ariaLabel: "RIDX",
            maxWidth: "800px",
        });    
        var markerRIDX = new google.maps.Marker({
            position: {
                lat: 19.3052,
                lng: -99.1033
            },
            map: map,
            title: 'RIDX, Xochimilco'
        });

        markerRIDX.addListener("click", () => {
            infowindowRIDX.open({
                anchor: markerRIDX,
                map,
            });
        });

        const contentRIDR =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">RIDR, Rectoría</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion en Rectoría" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/rectoria-general.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/rectoria-general.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";
        
        const infowindowRIDR = new google.maps.InfoWindow({
            content: contentRIDR,
            ariaLabel: "RIDR",
            maxWidth: "800px",
        });    
        var markerRIDR = new google.maps.Marker({
            position: {
                lat: 19.2862,
                lng: -99.1367
            },
            map: map,
            title: 'RIDR, Rectoría'
        });

        markerRIDR.addListener("click", () => {
            infowindowRIDR.open({
                anchor: markerRIDR,
                map,
            });
        });

        const contentRIML =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">RIML, Lerma</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion ubicada en Lerma" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/lerma.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/lerma.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";
        
        const infowindowRIML = new google.maps.InfoWindow({
            content: contentRIML,
            ariaLabel: "RIML",
            maxWidth: "800px",
        });    
        var markerRIML = new google.maps.Marker({
            position: {
                lat: 19.2915,
                lng: -99.5021
            },
            map: map,
            title: 'RIML, Lerma'
        });

        markerRIML.addListener("click", () => {
            infowindowRIML.open({
                anchor: markerRIML,
                map,
            });
        });

        const contentRUML =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">RUML, Lerma</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion en Lerma" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/lerma.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/lerma.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";
        
        const infowindowRUML = new google.maps.InfoWindow({
            content: contentRUML,
            ariaLabel: "RUML",
            maxWidth: "800px",
        });    
        var markerRUML = new google.maps.Marker({
            position: {
                lat: 19.2862,
                lng: -99.1367
            },
            map: map,
            title: 'RUML, Lerma'
        });

        markerRUML.addListener("click", () => {
            infowindowRUML.open({
                anchor: markerRUML,
                map,
            });
        });
        
        const contentUAMR =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">UAMR, Rectoría</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion en Rectoría" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/rectoria-general.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/rectoria-general.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";
        
        const infowindowUAMR = new google.maps.InfoWindow({
            content: contentUAMR,
            ariaLabel: "UAMR",
            maxWidth: "800px",
        });    
        
        var markerUAMR = new google.maps.Marker({
            position: {
                lat: 19.2871,
                lng: -99.1371
            },
            map: map,
            title: 'UAMR, Rectoría'
        });

        markerUAMR.addListener("click", () => {
            infowindowUAMR.open({
                anchor: markerUAMR,
                map,
            });
        });
        
        const contentUAMI =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '<h3 id="firstHeading" class="firstHeading">UAMI, Iztapalapa</h1>' +
            "</div>" +
            '<div id="bodyContent">' +
            "<p>Estacion en UAM Iztapalapa" + 
            "<br>"+
            "<picture>"+
                '<source srcset="storage/estaciones/iztapalapa.webp" type="image/webp" width = 100px >' +
                '<img src="storage/estaciones/iztapalapa.jpg" class="img-fluid" alt="uam, red, acelerográfica, lerma">' +
            '</picture>'
            "</div>" +
            "</div>";
        
        const infowindowUAMI = new google.maps.InfoWindow({
            content: contentUAMI,
            ariaLabel: "UAMI",
            maxWidth: "800px",
        });    
        
        var markerUAMI = new google.maps.Marker({
            position: {
                lat: 19.3645,
                lng: -99.0721
            },
            map: map,
            title: 'UAMI'
        });

        markerUAMI.addListener("click", () => {
            infowindowUAMI.open({
                anchor: markerUAMI,
                map,
            });
        });
    }
</script>