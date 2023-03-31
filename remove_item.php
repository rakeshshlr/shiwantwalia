<?php
session_start();

if(isset($_POST["id"])) {
  $id = $_POST["id"];

  // check if the item exists in the cart
  if(isset($_SESSION["cart"][$id])) {
    // remove the item from the cart
    unset($_SESSION["cart"][$id]);
  }
}

header("Location: basket.php");
exit();
?>
