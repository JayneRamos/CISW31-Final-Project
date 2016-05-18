<?php
function connect_db() {
  // Connect to database and return connection object.
  $res = new mysqli("localhost", "user", "pass", "strawberrymitten");
  if(!$res)
    return false;
  $res->autocommit(TRUE);
  return $res;
}

function res_to_array($res) {
  // Result object to array.
  $arr = array();
  while($row = $res->fetch_assoc()) {
    $arr[] = $row;
  }
  return $arr;
}
?>
