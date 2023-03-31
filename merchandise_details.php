<!DOCTYPE html>
<html>
<head>
	<title>Merchandise Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- <?php include("header.php"); ?> -->
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
	<div class="container">
		<div class="merchandise-details">
			<?php
				$merch_id = 1;
				$merch_title = "T-Shirts";
				$merch_description = "These are a classic merchandise item and can feature the artist's name or logo, artwork, or a memorable lyric or quote.";
				$merch_type = "Clothing";
				$merch_published = "March 28, 2023";
				$merch_thumbnail = "example_thumbnail.jpg";
			?>
			<div class="merch-image">
				<img src="img/shoping1.jpg" alt="<?php echo $merch_title; ?>">
			</div>
			<div class="merch-details">
				<h2><?php echo $merch_title; ?></h2>
				<p><strong>ID:</strong> <?php echo $merch_id; ?></p>
				<p><strong>Description:</strong> <?php echo $merch_description; ?></p>
				<p><strong>Type:</strong> <?php echo $merch_type; ?></p>
				<p><strong>Published Date:</strong> <?php echo $merch_published; ?></p>
			</div>
		</div>
	</div>
    <hr class="about__line">
    <div class="container">
		<div class="merchandise-details">
			<?php
				$merch_id = 2;
				$merch_title = "Hat";
				$merch_description = "A stylish hat with the artist's name or logo can be a fashionable accessory for fans to wear while showing their support.";
				$merch_type = "Clothing";
				$merch_published = "March 28, 2023";
				$merch_thumbnail = "example_thumbnail.jpg";
			?>
			<div class="merch-image">
				<img src="img/shoping2.jpg" alt="<?php echo $merch_title; ?>">
			</div>
			<div class="merch-details">
				<h2><?php echo $merch_title; ?></h2>
				<p><strong>ID:</strong> <?php echo $merch_id; ?></p>
				<p><strong>Description:</strong> <?php echo $merch_description; ?></p>
				<p><strong>Type:</strong> <?php echo $merch_type; ?></p>
				<p><strong>Published Date:</strong> <?php echo $merch_published; ?></p>
			</div>
		</div>
	</div>
    <hr class="about__line">
    <div class="container">
		<div class="merchandise-details">
			<?php
				$merch_id = 3;
				$merch_title = "Phone Cases";
				$merch_description = "With so many people using their phones as their primary device, a phone case with the artist's artwork or logo can be a practical and fun merchandise item.";
				$merch_type = "Accessories";
				$merch_published = "March 28, 2023";
				$merch_thumbnail = "example_thumbnail.jpg";
			?>
			<div class="merch-image">
				<img src="img/shoping3.jpg" alt="<?php echo $merch_title; ?>">
			</div>
			<div class="merch-details">
				<h2><?php echo $merch_title; ?></h2>
				<p><strong>ID:</strong> <?php echo $merch_id; ?></p>
				<p><strong>Description:</strong> <?php echo $merch_description; ?></p>
				<p><strong>Type:</strong> <?php echo $merch_type; ?></p>
				<p><strong>Published Date:</strong> <?php echo $merch_published; ?></p>

			</div>
		</div>
	</div>
    <hr class="about__line">
    <div class="container">
		<div class="merchandise-details">
			<?php
				$merch_id = 4;
				$merch_title = "Hoodies";
				$merch_description = "Hoodies are a popular clothing item, especially in colder weather, and can feature the artist's name, logo, or artwork.";
				$merch_type = "Clothing";
				$merch_published = "March 28, 2023";
				$merch_thumbnail = "example_thumbnail.jpg";
			?>
			<div class="merch-image">
				<img src="img/shoping4.jpg" alt="<?php echo $merch_title; ?>">
			</div>
			<div class="merch-details">
				<h2><?php echo $merch_title; ?></h2>
				<p><strong>ID:</strong> <?php echo $merch_id; ?></p>
				<p><strong>Description:</strong> <?php echo $merch_description; ?></p>
				<p><strong>Type:</strong> <?php echo $merch_type; ?></p>
				<p><strong>Published Date:</strong> <?php echo $merch_published; ?></p>

			</div>
		</div>
	</div>
    <hr class="about__line">
    
    <div class="container">
		<div class="merchandise-details">
			<?php
				
				$merch_id = 5;
				$merch_title = "Stickers";
				$merch_description = "Stickers are a low-cost and fun merchandise item that can feature the artist's logo, album artwork, or other designs related to the artist's brand.";
				$merch_type = "Accessories";
				$merch_published = "March 28, 2023";
				$merch_thumbnail = "example_thumbnail.jpg";
			?>
			<div class="merch-image">
				<img src="img/shoping5.jpg" alt="<?php echo $merch_title; ?>">
			</div>
			<div class="merch-details">
				<h2><?php echo $merch_title; ?></h2>
				<p><strong>ID:</strong> <?php echo $merch_id; ?></p>
				<p><strong>Description:</strong> <?php echo $merch_description; ?></p>
				<p><strong>Type:</strong> <?php echo $merch_type; ?></p>
				<p><strong>Published Date:</strong> <?php echo $merch_published; ?></p>

			</div>
		</div>
	</div>

	<?php include("footer.php"); ?>
</body>
</html>