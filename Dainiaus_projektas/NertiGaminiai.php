<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Nerti gaminiai</title>
</head>
<body>
    <header class="site-header">
        <div class="cart-icon" id="cartIcon" style="display: none;" onclick="showCartItems()">
            <span class="cart-count" id="cartCount">0</span>
            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	            width="20px" height="20px" viewBox="0 0 902.86 902.86"
	            xml:space="preserve"><g><g><path d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z
			 M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z"/><path d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717
			c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744
			c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742
			C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744
			c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z
			 M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742
			S619.162,694.432,619.162,716.897z"/></g></g></svg>
        </div>
        <nav class="main-nav">
            <ul class="flex-container">
                <li><a href="ViolArt.png"><img src="ViolArt.png" alt="ViolArt logotipas"></a></li>
                <li><a href="Pagrindinis.php">Pradžia</a></li>
                <li><a href="NertiGaminiai.php">Nerti gaminiai</a></li>
                <li><a href="Muilas.php">Muilas</a></li>
                <li><a href="Hidrolatai.php">Hidrolatai</a></li>
                <li><a href="GeliuKompozicijos.php">Gėlių kompozicijos</a></li>
                <li><a href="DovanuPakavimas.php">Dovanų pakavimas</a></li>
                <li><a href="Kontaktai.php">Kontaktai</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero-nerti">
        <div class="container">
            <h2>Stalo padėkliukai, rankinės, pirštinės, kojinės,krepšeliai ir dėžutės.</h2>
            <h4><br><b>Nėrimas</b> - malonumas savo rankomis sukurti daiktą, pajusti jo atsiradimo kelią nuo idėjos iki paskutinės kilpelės. Neriant susikaupia didelė kūrybinė energija ir potencialas, kurį norisi įgalinti. Tai prasminga ir nesudėtinga veikla.</h4>
            <div class="row">
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai1.png"><div class="price">25 €</div>
                    <div class="buy">Nerta rankinė<button onclick="addToCart()">Į krepšelį</button></div>
                </div>
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai2.png"><div class="price">25 €</div>
                    <div class="buy">Nerti padėkliukai<button onclick="addToCart()">Į krepšelį</button></div>
                </div>
            </div>   
            <div> 
                <h4><b>Nerti vąšeliu</b> - malonumas, aistra, savotiška meditacija ir geriausi vaistai nuo blogos nuotaikos.Tai paspirtis ir poilsis, kuris derinasi ir su nauda...</h4>
            </div>
            <div class="row">
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai3.png"><div class="price">50 €</div>
                    <div class="buy">Nertos rankinės<button onclick="addToCart()">Į krepšelį</button></div>
                </div>
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai4.png"><div class="price">25 €</div>
                    <div class="buy">Nerti padėkliukai<button onclick="addToCart()">Į krepšelį</button></div>
                </div> 
            </div>
        </div>
    </section>
    <section class="cart-items" id="cartItemsContainer" style="display: none;">
    <div class="container">
        <h2>Cart Items</h2>
        <div class="message-box"></div> 
        <!-- Naujas elementas pranešimui -->
    </div>
</section>
    <footer class="footer">
        <p>&copy;<?php echo date('Y'); ?> Violeta Pociuvienė || Visos teisės saugomos. Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.</p>
    </footer>
    <script>
        let cartItems = [];

        function addToCart() {
  const item = {
    name: "Item",
    quantity: 1,
    image: "images/item-icon.png",
  };
  cartItems.push(item);
  updateCartIcon();

  const cartItemsContainer = document.getElementById("cartItemsContainer");
  const messageBox = document.querySelector(".message-box");

  if (!messageBox) {
    const newMessageBox = document.createElement("div");
    newMessageBox.className = "message-box";
    newMessageBox.textContent = "Item added to cart!";
    cartItemsContainer.parentNode.insertBefore(newMessageBox, cartItemsContainer);
  } else {
    messageBox.style.display = "block";
    messageBox.textContent = "Item added to cart!";
  }

  setTimeout(function () {
    messageBox.style.display = "none";
  }, 3000); // Hide the message box after 3 seconds
}

function updateCartIcon() {
  const cartIcon = document.getElementById("cartIcon");
  const cartCountElement = document.getElementById("cartCount");
  const cartItemsContainer = document.getElementById("cartItemsContainer");

  cartCountElement.textContent = cartItems.length;
  cartIcon.style.display = "block";

  cartItemsContainer.innerHTML = "";
  cartItems.forEach((item, index) => {
    const cartItem = document.createElement("div");
    cartItem.className = "cart-item";

    const itemImage = document.createElement("img");
    itemImage.src = item.image;
    itemImage.alt = item.name;

    const itemInfo = document.createElement("div");
    itemInfo.className = "cart-item-info";

    const itemName = document.createElement("span");
    itemName.textContent = item.name;

    const itemQuantity = document.createElement("span");
    itemQuantity.className = "cart-item-quantity";
    itemQuantity.textContent = `Qty: ${item.quantity}`;

    const itemDelete = document.createElement("span");
    itemDelete.className = "cart-item-delete";
    itemDelete.textContent = "Delete";
    itemDelete.addEventListener("click", () => deleteItem(index));

    itemInfo.appendChild(itemName);
    itemInfo.appendChild(itemQuantity);
    itemInfo.appendChild(itemDelete);

    cartItem.appendChild(itemImage);
    cartItem.appendChild(itemInfo);

    cartItemsContainer.appendChild(cartItem);
  });
}
        //Pašalinti prekę
        function deleteItem(index) {
            cartItems.splice(index, 1);
            updateCartIcon();
        }
        //Parodyti prekes
        function showCartItems() {
    const cartItemsContainer = document.getElementById("cartItemsContainer");
    if (cartItemsContainer.style.display === "none") {
        cartItemsContainer.style.display = "block";
    } else {
        cartItemsContainer.style.display = "none";
    }
}
        </script>
    </body>
</html>