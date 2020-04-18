<?php

include '../PDOConnection/PDO.php';

$stmt = $db->query("select * from address");

// $results =$stmt->fetchAll(PDO::FETCH_NUM);
$results =$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {

  $id1 = $row['id'];
  $client_id1 = $row['client_id'];
  $address_type1 = $row['type_id'];
  $street1 = $row['street'];
  $city1 = $row['city'];
  $state1 = $row['state'];
  $zipcode1 = $row['zipcode'];
  
  // $id1 = $row['0'];
  // $client_id1 = $row['1'];
  // $address_type1 = $row['2'];
  // $street1 = $row['3'];
  // $city1 = $row['4'];
  // $state1 = $row['5'];
  // $zipcode1 = $row['6'];

  echo htmlentities($id1)." ".htmlentities($client_id1)." ".htmlentities($address_type1)
  ." ".htmlentities($street1)." ".htmlentities($city1)." ".htmlentities($state1)." ".htmlentities($zipcode1)."</br>";

  // echo "<pre>" . var_dump($row);
}


?>