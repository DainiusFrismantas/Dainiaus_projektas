contactForm.addEventListener('submit', function(event) {
  event.preventDefault();
  contactForm.reset();
  myFunction(); // Iškviečiame myFunction() funkciją
});

function myFunction() {
  // Pateikite swal pranešimą su gautais duomenimis
  swal("Žinutė sėkmingai išsiųsta!", "Atsakysime el. paštu.", "success");
}
