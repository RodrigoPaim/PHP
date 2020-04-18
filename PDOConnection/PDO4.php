<?php

include '../PDOConnection/PDO.php';

$clientID='1';
$dataContains='%ect%';
// $stmt = $db->prepare("select * from address where id=?");
// $stmt->bindValue(1,2);
$stmt = $db->prepare("select * from address where client_id = ? && street like ? && zipcode like ?");
$stmt->bindParam(1,$clientID);
$stmt->bindParam(2,$dataContains);
$stmt->bindValue(3,'%k8h%');
$stmt->execute();

// while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//   echo "<pre>" . var_dump($row) . "</pre>";
// }

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  $id1 = htmlentities($row['id']);
  $client_id1 = htmlentities($row['client_id']);
  $address_type1 = htmlentities($row['type_id']);
  $street1 = htmlentities($row['street']);
  $city1 = htmlentities($row['city']);
  $state1 = htmlentities($row['state']);
  $zipcode1 = htmlentities($row['zipcode']);
  
  echo ($id1)." ".($client_id1)." ".($address_type1)
  ." ".($street1)." ".($city1)." ".($state1)." ".($zipcode1)."</br>";
}

?>