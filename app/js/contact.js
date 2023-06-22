const contactForm = document.getElementById('contact-form');

// Prijunkite 'submit' įvykį prie formos 4 eilute turi keistis, apsirasyti veiksm1
contactForm.addEventListener('submit', function(event) {
  event.preventDefault();

  // Pateikite swal pranešimą su gautais duomenimis
  swal("Žinutė sėkmingai išsiųsta!", "Atsakysime el. paštu.", "success")
});