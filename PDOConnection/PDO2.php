<?php

include '../PDOConnection/PDO.php';

$stmt = $db->query("select * from address");

// while($row = $stmt->fetch()) {
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
// while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  // $id1 = $row['id'];
  // $client_id1 = $row['client_id'];
  // $address_type1 = $row['type_id'];
  // $street1 = $row['street'];
  // $city1 = $row['city'];
  // $state1 = $row['state'];
  // $zipcode1 = $row['zipcode'];

  // echo htmlentities($row['id'])." ".htmlentities($row['client_id'])." ".htmlentities($row['type_id'])
  // ." ".htmlentities($row['street'])." ".htmlentities($row['city'])." ".htmlentities($row['state'])." ".htmlentities($row['zipcode'])."</br>";

  echo "<pre>" . var_dump($row) . "</pre>";

}


?>