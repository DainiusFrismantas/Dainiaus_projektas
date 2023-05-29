<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Nerti gaminiai</title>
    <script>
        let cartItems = [];

        function addToCart() {
            const item = {
                name: "Item",
                quantity: 1,
                image: "item-icon.png"
            };
            cartItems.push(item);
            updateCartIcon();
            alert("Item added to cart!");
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

        function deleteItem(index) {
            cartItems.splice(index, 1);
            updateCartIcon();
        }

        function showCartItems() {
    const cartItemsContainer = document.getElementById("cartItemsContainer");
    if (cartItemsContainer.style.display === "none") {
        cartItemsContainer.style.display = "block";
    } else {
        cartItemsContainer.style.display = "none";
    }
}
    </script>
</head>
<body>
    <header class="site-header">
        <div class="cart-icon" id="cartIcon" style="display: none;" onclick="showCartItems()">
            <span class="cart-count" id="cartCount">0</span>
            <img src="cart-icon.png" alt="Cart Icon" width="20" height="20">
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
            <h2>Stalo padėkliukai, rankinės, pirštinės, kojinės,
                krepšeliai ir dėžutės.</h2>
            <h4><br>
                <b>Nėrimas</b> - malonumas savo rankomis sukurti daiktą, pajusti jo atsiradimo kelią nuo idėjos iki paskutinės kilpelės. 
                Neriant susikaupia didelė kūrybinė energija ir potencialas, kurį norisi įgalinti. Tai prasminga ir nesudėtinga veikla.</h4>
            <div class="row">

                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai1.png">
                    <div class="price">25 €</div>
                    <div class="buy"><button onclick="addToCart()">Į krepšelį</button></div>
                </div>
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai2.png">
                    <div class="price">25 €</div>
                    <div class="buy"><button onclick="addToCart()">Į krepšelį</button></div>
                </div>
            </div>   
            <div> 
                <h4><b>Nerti vąšeliu</b> - malonumas, aistra, savotiška meditacija ir geriausi vaistai nuo blogos nuotaikos.Tai paspirtis ir poilsis, kuris derinasi ir su nauda...</h4>
            </div>
            <div class="row">
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai3.png">
                    <div class="price">50 €</div>
                    <div class="buy"><button onclick="addToCart()">Į krepšelį</button></div>
                </div>
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai4.png">
                    <div class="price">25 €</div>
                    <div class="buy"><button onclick="addToCart()">Į krepšelį</button></div>
                </div> 
            </div>
        </div>
    </section>
    <section class="cart-items" id="cartItemsContainer" style="display: none;">
        <div class="container">
            <h2>Cart Items</h2>
        </div>
    </section>
    <footer class="footer">
        <p>&copy;<?php echo date('Y'); ?>Violeta Pociuvienė || Visos teisės saugomos. Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.</p>
    </footer>
</body>
</html>