<?php
include_once("db.php");

function get_products() {
  // Query database for available products.
  $db = connect_db();
  $q = "SELECT * FROM Products";
  $res = @$db->query($q);

  if(!$res)
    return false;

  $res = res_to_array($res);
  $db->close();
  return $res;
}

function check_product($id) {
  // Check if product is valid.
  if(!is_numeric($id))
    return false;
  $db = connect_db();
  $q = "SELECT prod_name FROM Products WHERE plu_id='".$id."'";
  $res = @$db->query($q);
  $num_rows = @$res->num_rows;
  $db->close();

  if($num_rows > 0)
    return true;
  else
    return false;
}

function get_product_info($id) {
  // Return product information for given ID.
  if(!check_product($id))
    return false;
  $db = connect_db();
  $q = "SELECT * FROM Products WHERE plu_id='".$id."'";
  $res = @$db->query($q);

  if(!$res)
    return false;

  $res = @$res->fetch_assoc();
  $db->close();
  return $res;
}
?>
