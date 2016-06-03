<?php
include_once("db.php");
include_once("session.php");

function get_user_orders() {
  // Get all orders for logged in user.
  if(!user_logged_in()) {
    return false;
  }

  $db = connect_db();
  $q = "SELECT order_num, order_date FROM Orders WHERE cust_id='".$_SESSION['user']."'";
  $res = @$db->query($q);

  if(!$res) {
    return false;
  }

  $res = res_to_array($res);
  return $res;
}

function get_user_order($orderid) {
  // Get info for a specific order.
  if($orderid == "") {
    return false;
  }

  $db = connect_db();
  $q = "SELECT * FROM Orders WHERE order_num='".$orderid."' AND cust_id='".$_SESSION['id']."'";
  $res = $db->query($q);

  if(@$res->num_rows < 1) {
    // Order does not exist for this user.
    return false;
  }

  $q = "SELECT * FROM OrderItems WHERE order_num='".$orderid."'";
  $res = $db->query($q);
  if(!$res) {
    return false;
  }

  $res = res_to_array($res);
  $db->close();
  return $res;
}
?>
