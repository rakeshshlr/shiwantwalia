<!DOCTYPE html>
<html>
<head>
	<title>Shopping Basket</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- <?php include("header.php"); ?> -->

    <!-- Header section -->
	<div class="header">
		<img src="img/logo.png" alt="My Logo">
		<ul>
		<li><a href="index.php">Home</a></li>
			<li><a href="about_artist.php">About artist</a></li>
			<li><a href="merchandise_listing.php">Merchandise listing</a></li>
			<li><a href="merchandise_details.php">Merchandise details</a></li>
			<li><a href="basket.php">Basket</a></li>
			<li><a href="resgistration.php">Registration</a></li>
			<li><a href="login.php">login</a></li>		</ul>
	</div>

	
	<div class="container">
		<div class="basket">
			<h2>Shopping Basket</h2>
			<?php
				// Check if the cart session variable is set
				if(isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0)
                 {
					$total_price = 0;
					?>
					<table>
						<thead>
							<tr>
								<th>Item</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								// Loop through cart items and display them in table rows
								foreach($_SESSION["cart"] as $key => $item){
									$item_id = $item["id"];
									$item_title = $item["title"];
									$item_price = $item["price"];
									$item_quantity = $item["quantity"];
									$item_total = $item_price * $item_quantity;
									$total_price += $item_total;
									?>
									<tr>
										<td><?php echo $item_title; ?></td>
										<td><?php echo $item_price; ?></td>
										<td>
											<form action="update_cart.php" method="post">
												<input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
												<input type="number" name="quantity" min="1" value="<?php echo $item_quantity; ?>">
												<input type="submit" value="Update">
											</form>
										</td>
										<td><?php echo $item_total; ?></td>
										<td>
											<form action="remove_item.php" method="post">
												<input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
												<input type="submit" value="Remove">
											</form>
										</td>
									</tr>
									<?php
								}
							?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="3">Total Price:</td>
								<td><?php echo $total_price; ?></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
					<form action="checkout.php" method="post">
						<input type="submit" value="Checkout">
					</form>
					<?php
				} else {
					echo "<p>Your shopping basket is empty.</p>";
				}
			?>
		</div>
	</div>
	
	<?php include("footer.php"); ?>
</body>
</html>
