<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Document</title>
</head>
<body>
	<!-- Header section -->
	<div class="logo">
		 
		 <nav>
			<ul>
		             <li><a href="index.php">Home</a></li>
			         <li><a href="about_artist.php">About artist</a></li>
			         <li><a href="merchandise_listing.php">Merchandise listing</a></li>
			         <li><a href="merchandise_details.php">Merchandise details</a></li>
			         <li><a href="basket.php">Basket</a></li>
			         <li><a href="resgistration.php">Registration</a></li>
			         <li><a href="login.php">login</a></li>
			</ul>
			<a href="#"><img src="img/logo.png" ></a>
		 </nav>
	</div>

<!-- Merchandise listing section -->
<section class="merchandise">
  <div class="merchandise__items">
    <!-- Item 1 -->
    <div class="merchandise__item">
      <img class="merchandise__image" src="img/shoping1.jpg" alt="Item 1">
      <h2 class="merchandise__title">T-Shirts</h2>
      <p class="merchandise__description">These are a classic merchandise item and can feature the artist's name or logo, artwork, or a memorable lyric or quote.</p>
      <p class="merchandise__price">$30.00</p>
      <button class="merchandise__add-to-cart">Add to Cart</button>
    </div>
    
    <!-- Item 2 -->
    <div class="merchandise__item">
      <img class="merchandise__image" src="img/shoping2.jpg" alt="Item 2">
      <h2 class="merchandise__title">Hats</h2>
      <p class="merchandise__description">A stylish hat with the artist's name or logo can be a fashionable accessory for fans to wear while showing their support</p>
      <p class="merchandise__price">$20.00</p>
      <button class="merchandise__add-to-cart">Add to Cart</button>
    </div>
  </div>
  <div class="merchandise__items">
    <!-- Item 5 -->
    <div class="merchandise__item">
      <img class="merchandise__image" src="img/shoping3.jpg" alt="Item 1">
      <h2 class="merchandise__title">Phone Cases</h2>
      <p class="merchandise__description">With so many people using their phones as their primary device, a phone case with the artist's artwork or logo can be a practical and fun merchandise item.</p>
      <p class="merchandise__price">$10.00</p>
      <button class="merchandise__add-to-cart">Add to Cart</button>
    </div>
    
    <!-- Item 4 -->
    <div class="merchandise__item">
      <img class="merchandise__image" src="img/shoping4.jpg" alt="Item 2">
      <h2 class="merchandise__title">Hoodies</h2>
      <p class="merchandise__description">Hoodies are a popular clothing item, especially in colder weather, and can feature the artist's name, logo, or artwork.</p>
      <p class="merchandise__price">$30.00</p>
      <button class="merchandise__add-to-cart">Add to Cart</button>
    </div>
  </div>
  <!-- Item 5 -->
  <div class="merchandise__item">
      <img class="merchandise__image" src="img/shoping5.jpg" alt="Item 2">
      <h2 class="merchandise__title">Stickers</h2>
      <p class="merchandise__description"> Stickers are a low-cost and fun merchandise item that can feature the artist's logo, album artwork, or other designs related to the artist's brand.</p>
      <p class="merchandise__price">$5.00</p>
      <button class="merchandise__add-to-cart">Add to Cart</button>
    </div>
  
  <!-- Shopping cart -->
  <div class="merchandise__cart">
    <h2 class="merchandise__cart-title">Shopping Cart</h2>
    <ul class="merchandise__cart-items">
      <!-- empty cart -->
    </ul>
    <p class="merchandise__cart-total">Total: $0.00</p>
    <button class="merchandise__cart-checkout">Checkout</button>
  </div>
</section>
<?php include("footer.php"); ?>
</body>
</html>