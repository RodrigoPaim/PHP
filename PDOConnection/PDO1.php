<?php

include '../PDOConnection/PDO.php';

foreach($db->query("select * from address") as $row1) {

  $id1 = $row1['id'];
  $client_id1 = $row1['client_id'];
  $address_type1 = $row1['type_id'];
  $street1 = $row1['street'];
  $city1 = $row1['city'];
  $state1 = $row1['state'];
  $zipcode1 = $row1['zipcode'];

  echo htmlentities($id1)." ".htmlentities($client_id1)." ".htmlentities($address_type1)
  ." ".htmlentities($street1)." ".htmlentities($city1)." ".htmlentities($state1)." ".htmlentities($zipcode1)."</br>";

}


?>