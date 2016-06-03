<?php
include_once("db.php");
include_once("products.php");

function edit_product($id, $name, $price, $desc, $notes, $stock, $image) {
  // Update information for a product.
  if($id == "" || $name == "" || $price == "" || $desc == "" || $notes == "" || $stock == "" || $image == "" || !is_numeric($stock)) {
    return false;
  }
  if(!check_product($id)) {
    return false;
  }

  $db = connect_db();
  $q = "UPDATE Products SET prod_name=?, prod_price=?, prod_desc=?, prod_notes=?, prod_onhand=?, prod_image=? WHERE plu_id=?";
  $update = $db->prepare($q);
  $update->bind_param("sdssiss", $name, $price, $desc, $notes, $stock, $image, $id);
  if($update->execute()) {
    $db->close();
    return true;
  }
  else {
    $db->close();
    return false;
  }
}

function add_product($id, $name, $price, $desc, $notes, $stock, $image) {
  // Insert new product.
  if($id == "" || $name == "" || $price == "" || $desc == "" || $notes == "" || $stock == "" || $image == "" || !is_numeric($stock)) {
    return false;
  }

  $db = connect_db();
  $q = "INSERT INTO Products VALUES(?, ?, ?, ?, ?, ?, ?)";
  $update = $db->prepare($q);
  $update->bind_param("ssdssis", $id, $name, $price, $desc, $notes, $stock, $image);
  if($update->execute()) {
    $db->close();
    return true;
  }
  else {
    $db->close();
    return false;
  }
}
?>
