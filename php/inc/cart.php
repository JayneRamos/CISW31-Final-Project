<?php
include_once("db.php");
include_once("products.php");

function calculate_subtotal() {
  $subtotal = 0;
  
}

function add_to_cart($id, $qty=1) {
  // Add given product to cart.
  if(!check_product($id))
    return false;
  if(isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id] += $qty;
    $_SESSION['cart_items'] += $qty;
    //$_SESSION['cart_total'] = 0;
  }
  else {
    $_SESSION['cart'][$id] = $qty;
    $_SESSION['cart_items'] += $qty;
    //$_SESSION['cart_total'] = 0;
  }
}
?>
