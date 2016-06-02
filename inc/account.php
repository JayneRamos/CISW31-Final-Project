<?php
include_once("db.php");
include_once("validation.php");

function update_password($oldpass, $newpass) {
  // Update user's password.
  if(isset($_SESSION['user'])) {
    $db = connect_db();
    $q = "SELECT cust_password FROM Customers WHERE cust_id='".$_SESSION['user']."'";
    $res = @$db->query($q);
    $res = @$res->fetch_assoc();

    if($res['cust_password'] == hash("sha256", $oldpass)) {
      // Passwords match, continue changing the password.
      $q = "UPDATE Customers SET cust_password='".hash("sha256", $newpass)."' WHERE cust_id='".$_SESSION['user']."'";
      $res = @$db->query($q);
      $db->close();
      if($res)
        return true;
      else
        return false;
    }
    else {
      $db->close();
      return false;
    }
  }
  else {
    return false;
  }
}

function update_information($name, $addr, $city, $state, $zip, $email) {
  // Update user's account information.
  if($name == "" || $addr == "" || $city == "" || $state == "" || $zip == "" || $email == "") {
    return false;
  }
  if(!valid_state($state) || !valid_zip($zip) || !valid_email($email)) {
    return false;
  }

  $db = connect_db();
  $q = "UPDATE Customers SET cust_name=?, cust_address=?, cust_city=?, cust_state=?, cust_zip=?, cust_email=? WHERE cust_id=?";
  $update = $db->prepare($q);
  $update->bind_param("sssssss", $name, $addr, $city, strtoupper($state), $zip, $email);
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
