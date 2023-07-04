var cartItemsCount = 0;
var cartTotal = 0.00;
// Šios eilutės deklaruoja kintamuosius cartItemsCount ir cartTotal pradinėmis reikšmėmis.
//Ši funkcija prideda prekę į krepšelį. Ji sukuria naują <li> elementą su prekės informacija (pavadinimas ir kiekis), taip pat mygtukus, kurie leidžia padidinti arba sumažinti prekės kiekį. Šie elementai yra pridėti prie krepšelio sąrašo (cart-items), taip pat atnaujinamas bendras prekių kiekis ir skaičiuojama bendra suma.
function addToCart(item, quantity, price) {
var cartItems = document.getElementById('cart-items');
var spanList = cartItems.getElementsByTagName('span');

for (var i = 0; i < spanList.length; i++) {
if (spanList[i].textContent.includes(item)) {
Swal.fire({
icon: 'warning',
title: 'Dėmesio!',
text: 'Ši prekė jau yra krepšelyje!',
});
return; // Jei prekė jau yra krepšelyje, nutraukiame funkciją
}
}

var li = document.createElement('li');
var span = document.createElement('span');
span.textContent = item + ' x' + quantity;
li.appendChild(span);

var increaseButton = document.createElement('button');
increaseButton.textContent = '+';
increaseButton.onclick = function() {
updateQuantity(item, quantity, price);
};
li.appendChild(increaseButton);

var decreaseButton = document.createElement('button');
decreaseButton.textContent = '-';
decreaseButton.onclick = function() {
updateQuantity(item, -quantity, price);
};
li.appendChild(decreaseButton);

cartItems.appendChild(li);

cartItemsCount += quantity;
document.getElementById('cart-items-count').textContent = cartItemsCount;
calculateTotal(quantity, price);

Swal.fire({
icon: 'success',
title: 'Sėkmė!',
text: 'Prekė sėkmingai pridėta į krepšelį!',
});
}
//Ši funkcija atnaujina prekės kiekį krepšelyje. Ji ieško atitinkamos prekės informacijos sąraše ir atnaujina jos kiekį pagal nurodytą pokytį. Taip pat tikrinama, ar kiekis neviršija leistino maksimalaus kiekio (15) arba  ar jis nėra mažesnis už 0. Jei kiekis yra neleistinas, iššoka Swal pranešimas su klaidos pranešimu.
function updateQuantity(item, quantity, price) {
var spanList = document.getElementById('cart-items').getElementsByTagName('span');
for (var i = 0; i < spanList.length; i++) {
if (spanList[i].textContent.includes(item)) {
var currentQuantity = parseInt(spanList[i].textContent.split('x')[1].trim());
var newQuantity = currentQuantity + quantity;

// Patikriname, ar kiekis neviršija leistino maksimalaus kiekio (15) arba ar jis ne mažesnis už 0
if (newQuantity > 15) {
Swal.fire({
  icon: 'error',
  title: 'Klaida!',
  text: 'Pasirinkote per daug prekių! Prekių skaičius ribotas!',
});
return; // Neleidžiame padidinti kiekio virš 15
}
if (newQuantity <= 0) {
// Jei prekės kiekis pasiekė 0 arba mažesnis, pašaliname prekę iš krepšelio
spanList[i].parentNode.remove();
calculateTotal(-currentQuantity, price);
cartItemsCount -= currentQuantity;
document.getElementById('cart-items-count').textContent = cartItemsCount;
return;
}

spanList[i].textContent = item + ' x' + newQuantity;
calculateTotal(quantity, price);
return;
}
}
}
//Ši funkcija skaičiuoja bendrą prekių krepšelio sumą. Ji padaugina prekės kiekį iš jos kainos ir prideda šią sumą prie bendros sumos (cartTotal). Tai taip pat atnaujina bendrą sumą, rodomą vartotojui.


function calculateTotal(quantity, price) {
  cartTotal += quantity * price;
  document.getElementById('cart-total').textContent = cartTotal;
}

function clearCart() {
  var cartItems = document.getElementById('cart-items');
  while (cartItems.firstChild) {
    cartItems.removeChild(cartItems.firstChild);
  }
  cartItemsCount = 0;
  cartTotal = 0;
  document.getElementById('cart-items-count').textContent = cartItemsCount;
  document.getElementById('cart-total').textContent = cartTotal;
}
//  Ši funkcija keičia krepšelio rodymo būseną. Ji keičia CSS stilių savybę display tarp block ir none, taip slepdama arba rodydama krepšelį vartotojui.
function toggleCart() {
  var cart = document.getElementById('cart');
  cart.classList.toggle('hidden'); // Prideda arba pašalina klasę "hidden" iš krepšelio elemento
  if (cart.style.display === 'block') {
    cart.style.display = 'none';
  } else {
    cart.style.display = 'block';
  }
}


