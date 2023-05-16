// Pirma užsikrauna puslapis, o vėliau jau JS kodas
document.addEventListener("DOMContentLoaded", function(event) {

    // Žemėlapis
    var mymap = L.map('map').setView([56.2, 22.35], 13);
  
    // Kartografinis pagrindas
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 
      '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
      maxZoom: 18,
      minZoom: 7,
    }).addTo(mymap);
  
    // Simbolis žymintis vietą
    var marker = L.marker([56.3, 22.35]).addTo(mymap);
  
    // Iššokantis langas
    marker.bindPopup("<b>Sveiki!</b><br>Atvykite prekių apžiūrėti gyvai!").openPopup();
  
    // Susisiekimo forma
    var form = document.getElementById("contact-form");
  
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      var name = document.getElementById("name").value;
      var surname = document.getElementById("surname").value;
      var email = document.getElementById("email").value;
      var message = document.getElementById("message").value;
      alert("Ačiū, " + name + " " + surname + "!\n\nEmail: " + email + "\n\nMessage: " + message);
      form.reset();
    });
  
  });
  