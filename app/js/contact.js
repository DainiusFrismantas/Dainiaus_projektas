const contactForm = document.getElementById('contact-form');

// Prijunkite 'submit' įvykį prie formos
contactForm.addEventListener('submit', function(event) {
  event.preventDefault();

  // Gaukite įvestus duomenis
  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  // Išvalykite formos laukus
  contactForm.reset();

  // Pateikite swal pranešimą su gautais duomenimis
  swal("Žinutė sėkmingai išsiųsta!", "Atsakysime el. paštu.", "success")
  // Išjungti numatytąjį pranešimą iš localhost
  event.stopImmediatePropagation();
});