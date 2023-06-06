// Pirma užsikrauna puslapis, o vėliau jau JS kodas
document.addEventListener("DOMContentLoaded", function(event) {

    // Žemėlapis
    var mymap = L.map('map').setView([56.2, 22.35], 13);
  
     // Kartografinių pagrindų sluoksnių sąrašas
     var baseLayers = {
      "OpenStreetMap": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
          maxZoom: 18,
          minZoom: 7
      }),
      "Esri World Street Map": L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri',
        maxZoom: 18,
        minZoom: 7
    })
  };
  
    // Simbolis žymintis vietą
    baseLayers["Esri World Street Map"].addTo(mymap);
    var marker = L.marker([56.303503, 22.280236]).addTo(mymap);
  
    // Iššokantis langas
    marker.bindPopup("<b>Sveiki!</b><br>Atvykite prekių apžiūrėti gyvai!").openPopup();
  
    // Pridėti valdiklį žemėlapio kartografiniam pagrindui keisti
    L.control.layers(baseLayers).addTo(mymap);
    // Susisiekimo forma
    var form = document.getElementById("contact-form");
  
   
  });
  
  