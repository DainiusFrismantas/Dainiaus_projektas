 // ŽEMĖLAPIO FUNKCIONALUMAS PAGRINDINIAME PUSLAPYJE
 document.addEventListener("DOMContentLoaded", function (event) {
    // Žemėlapis
    var mymap = L.map('map')
        .setView([56.303503, 22.280236], 13);

    // Kartografinių pagrindų sluoksnių sąrašas
    var baseLayers = {
        "OpenStreetMap": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            , maxZoom: 16
            , minZoom: 7
        }).addTo(mymap)
        , "Esri World Street Map": L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri'
            , maxZoom: 16
            , minZoom: 7
        })
    };

    // Simbolis žymintis vietą
    var marker = L.marker([56.303503, 22.280236])
        .addTo(mymap);

    // Iššokantis langas tik paspaudus ant ikonėlės
    marker.on('click', function () {
        marker.bindPopup("<b>Sveiki!</b><br>Atvykite prekių apžiūrėti gyvai!")
            .openPopup();
    });

    // Pridėti valdiklį žemėlapio kartografiniam pagrindui keisti
    L.control.layers(baseLayers)
        .addTo(mymap);
});