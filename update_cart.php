<?php
session_start();

if(isset($_POST['item_id']) && isset($_POST['quantity'])) {
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];

    // Update cart item quantity
    if(isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id]['quantity'] = $quantity;
    }
}

// Redirect back to the cart page
header('Location: basket.php');
exit;
?>
