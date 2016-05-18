<?php
session_start();

if(!isset($_SESSION['cart'])) {
  // Set cart session data if it is not set.
  $_SESSION['cart'] = array();
  $_SESSION['cart_items'] = 0;
  $_SESSION['cart_subtotal'] = 0;
}

if(!isset($_SESSION['user'])) {
  // Set user ID session data if it is not set.
  $_SESSION['user'] = NULL;
  $_SESSION['user_admin'] = false;
}

function user_logged_in() {
  // Check if user is logged in.
  if(!isset($_SESSION['user']) || is_null($_SESSION['user']))
    return false;
  else
    return true;
}

function user_admin_level() {
  // Check if user is an administrator.
  if(!isset($_SESSION['user_admin']) || is_null($_SESSION['user_admin']) || !$_SESSION['user_admin'])
    return false;
  else
    return true;
}
?>
