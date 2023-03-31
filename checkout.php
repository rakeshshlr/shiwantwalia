<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  exit();
}

// Check if cart is empty
if (empty($_SESSION['cart'])) {
  header('Location: merchandise.php');
  exit();
}

// Include database connection
require_once 'db.php';

// Get user's address from database
$stmt = $pdo->prepare('SELECT address FROM users WHERE id = ?');
$stmt->execute([$_SESSION['user']['id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Calculate total price of items in cart
$totalPrice = 0;
foreach ($_SESSION['cart'] as $item) {
  $totalPrice += $item['price'] * $item['quantity'];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Insert order into database
  $stmt = $pdo->prepare('INSERT INTO orders (user_id, items, total_price, address) VALUES (?, ?, ?, ?)');
  $stmt->execute([$_SESSION['user']['id'], json_encode($_SESSION['cart']), $totalPrice, $_POST['address']]);

  // Clear cart and redirect to order confirmation page
  $_SESSION['cart'] = [];
  header('Location: order_confirmation.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout - My Website</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <h1>Checkout</h1>
    <div class="checkout">
      <form method="POST">
        <h2>Delivery Address</h2>
        <textarea name="address" required><?php echo htmlspecialchars($user['address']); ?></textarea>

        <h2>Order Summary</h2>
        <table>
          <thead>
            <tr>
              <th>Item</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($_SESSION['cart'] as $item): ?>
              <tr>
                <td><?php echo htmlspecialchars($item['title']); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td><?php echo '$' . number_format($item['price'], 2); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="2">Total:</td>
              <td><?php echo '$' . number_format($totalPrice, 2); ?></td>
            </tr>
          </tfoot>
        </table>

        <button type="submit">Place Order</button>
      </form>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
